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
        
    </div>
</div>

<h1>PHP Quiz</h1>
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
                        <input type="radio" name="answers[<?php echo $q['id']; ?>]"
                            value="<?php echo htmlspecialchars($option); ?>" class="quiz-radio"
                            onclick="handleRadioToggle(this)">
                        <span><?php echo htmlspecialchars($option); ?></span>
                    </label>
                <?php endforeach; ?>
            </div>

            <div style="margin-top: 40px; display: flex; justify-content: center;">
                <?php if ($index < count($questions) - 1): ?>
                    <button type="button" class="btn next-btn" id="nextBtn-<?php echo $index; ?>" onclick="nextQuestion()"
                        disabled style="width: auto; padding: 12px 40px;">Next Question</button>
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

<!-- Custom Notification Modal -->
<div id="leaveModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); z-index: 10000; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
    <div style="background: var(--glass); display: flex; flex-direction: column; gap: 20px; align-items: center; padding: 40px; border-radius: 16px; border: 1px solid var(--glass-border); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); max-width: 400px; text-align: center; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);">
        <div style="font-size: 3rem;">⚠️</div>
        <h2 style="color: var(--primary); font-size: 1.8rem; margin: 0;">Leave Quiz?</h2>
        <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.5; margin: 0;">You have an ongoing quiz. Are you sure you want to leave? Your progress will be lost.</p>
        <div style="display: flex; gap: 15px; margin-top: 15px; width: 100%;">
            <button type="button" id="cancelLeaveBtn" class="btn btn-outline" style="flex: 1; margin-top: 0;">Cancel</button>
            <button type="button" id="confirmLeaveBtn" class="btn" style="flex: 1; background: #ef4444; margin-top: 0;">Leave</button>
        </div>
    </div>
</div>

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
            isSubmitting = true;
            document.getElementById('quizForm').submit();
        }
    }

    let isSubmitting = false;

    function updateProgress() {
        // Progress calculation is handled internally by currentIdx
    }

    // Modal Variables
    let targetLeaveUrl = null;

    // Start everything
    window.onload = () => {
        startTimer();
        updateProgress();

        const leaveModal = document.getElementById('leaveModal');

        // Intercept all link clicks
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a');
            if (link && !isSubmitting) {
                e.preventDefault();
                targetLeaveUrl = link.href;
                leaveModal.style.display = 'flex';
                // Trigger reflow for animation
                void leaveModal.offsetWidth;
                leaveModal.style.opacity = '1';
            }
        });

        document.getElementById('cancelLeaveBtn').addEventListener('click', function() {
            leaveModal.style.opacity = '0';
            setTimeout(() => {
                leaveModal.style.display = 'none';
                targetLeaveUrl = null;
            }, 300);
        });

        document.getElementById('confirmLeaveBtn').addEventListener('click', function() {
            if (targetLeaveUrl) {
                isSubmitting = true; // Bypass beforeunload
                window.location.href = targetLeaveUrl;
            }
        });

        // Warn the user before they leave the page unexpectedly (like closing tab)
        window.addEventListener('beforeunload', function (e) {
            if (!isSubmitting) {
                e.preventDefault();
                e.returnValue = 'You have an ongoing quiz. Are you sure you want to leave? Your progress will be lost.';
                return e.returnValue;
            }
        });

        // Set flag to true when making a legitimate form submission
        document.getElementById('quizForm').addEventListener('submit', function () {
            isSubmitting = true;
        });
    };
</script>

<?php include 'partials/footer.php'; ?>