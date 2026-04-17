<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

if (!isset($_SESSION['difficulty'])) {
    header("Location: index.php?page=difficulty");
    exit();
}

if (isset($_SESSION['quiz_done']) && $_SESSION['quiz_done'] === true) {
    header("Location: index.php?page=results");
    exit();
}

$questions = $_SESSION['questions'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_quiz'])) {
    $userAnswers = isset($_POST['answers']) ? $_POST['answers'] : [];
    $_SESSION['results'] = checkAnswers($userAnswers, $questions);
    $_SESSION['quiz_done'] = true;
    header("Location: index.php?page=results");
    exit();
}

include 'partials/header.php';
?>

<div class="header-actions" style="display: flex; align-items: center; width: 100%; margin-bottom: 30px;">
    <div style="flex: 1; text-align: left;">
        <a href="index.php?page=difficulty" class="logout-link" style="font-size: 0.8rem;">Change Difficulty</a>
    </div>
    <div class="mode-control" style="flex: 1; text-align: center;">
        <span class="badge" style="display: inline-block;"><?php echo $_SESSION['difficulty']; ?> Mode</span>
    </div>
    <div style="flex: 1; text-align: right;">
        <a href="index.php?page=logout" class="logout-link" style="font-size: 0.8rem;">Logout</a>
    </div>
</div>

<h1>Web Mastery Quiz</h1>
<p class="subtitle" style="margin-bottom: 30px;">Level: <?php echo $_SESSION['difficulty']; ?></p>

<div class="timer-display" id="countdown">60s</div>

<form method="POST" action="index.php?page=quiz" id="quizForm">
    <?php foreach ($questions as $index => $q): ?>
        <div class="question-card <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"
            id="q-<?php echo $index; ?>">
            <p style="text-align: center; color: #94a3b8; font-size: 0.9rem; margin-bottom: 10px;">Question
                <?php echo ($index + 1); ?> of <?php echo count($questions); ?>
            </p>
            <p class="question-text" style="font-size: 1.3rem; margin-bottom: 25px; text-align: center;">
                <?php echo ($index + 1) . ". " . htmlspecialchars($q['question']); ?>
            </p>

            <div class="options-container">
                <?php foreach ($q['options'] as $oIndex => $option): ?>
                    <label class="option">
                        <input type="radio" name="answers[<?php echo $q['id']; ?>]" value="<?php echo htmlspecialchars($option); ?>"
                            class="quiz-radio" onclick="handleRadioToggle(this)">
                        <span><?php echo htmlspecialchars($option); ?></span>
                    </label>
                <?php endforeach; ?>
            </div>

            <div style="margin-top: 40px; display: flex; justify-content: center;">
                <?php if ($index < count($questions) - 1): ?>
                    <button type="button" class="btn next-btn" id="nextBtn-<?php echo $index; ?>" onclick="nextQuestion()"
                        disabled style="width: auto; padding: 12px 40px;">Next Question &gt;&gt;</button>
                <?php else: ?>
                    <button type="submit" name="submit_quiz" class="btn" style="width: auto; padding: 12px 40px;">Finish Quiz
                        &gt;&gt;</button>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Auto-submit hidden field to detect last question -->
    <input type="hidden" name="submit_quiz" value="1">
</form>

<script>
    let currentIdx = 0;
    const total = <?php echo count($questions); ?>;
    let timeLeft = 60;
    let timerInterval;

    function startTimer() {
        clearInterval(timerInterval);
        timeLeft = 60;
        updateTimerUI();

        timerInterval = setInterval(() => {
            timeLeft--;
            updateTimerUI();

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                nextQuestion();
            }
        }, 1000);
    }

    function updateTimerUI() {
        const countdown = document.getElementById('countdown');
        if (!countdown) return;

        countdown.innerText = timeLeft + 's';

        // Color logic
        countdown.style.color = 'var(--primary)';
        if (timeLeft <= 20) countdown.style.color = '#fbbf24';
        if (timeLeft <= 10) countdown.style.color = '#ef4444';
    }

    function handleRadioToggle(radio) {
        if (radio.dataset.checked === "true") {
            radio.checked = false;
            radio.dataset.checked = "false";
        } else {
            // Reset others in the same question
            const radios = document.getElementsByName(radio.name);
            radios.forEach(r => r.dataset.checked = "false");
            radio.dataset.checked = "true";
        }
        updateButtonState();
    }

    function updateButtonState() {
        const currentCard = document.getElementById('q-' + currentIdx);
        const checked = currentCard.querySelector('input[type="radio"]:checked');
        const btn = document.getElementById('nextBtn-' + currentIdx);

        if (btn) {
            if (checked) {
                btn.removeAttribute('disabled');
            } else {
                btn.setAttribute('disabled', 'true');
            }
        }
    }

    function nextQuestion() {
        if (currentIdx < total - 1) {
            const currentCard = document.getElementById('q-' + currentIdx);

            // 1. Fade out current card
            currentCard.style.opacity = '0';
            currentCard.style.transform = 'translateY(-20px)';

            setTimeout(() => {
                // 2. Hide current card and update index
                currentCard.classList.remove('active');
                currentIdx++;

                // 3. Show next card
                const nextCard = document.getElementById('q-' + currentIdx);
                nextCard.classList.add('active');

                // 4. Reset card styles for animation
                nextCard.style.opacity = '1';
                nextCard.style.transform = 'translateY(0)';

                // 5. Reset timer and progress
                startTimer();
                updateProgress();
            }, 300); // Wait for fade out
        } else {
            document.getElementById('quizForm').submit();
        }
    }

    function updateProgress() {
        // Progress calculation is handled internally by currentIdx
    }

    // Start everything
    window.onload = () => {
        startTimer();
        updateProgress();
    };
</script>

<?php include 'partials/footer.php'; ?>