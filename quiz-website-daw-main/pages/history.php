<?php
// Note: This component assumes $pdo and $userId are already available from profile.php
// or whoever includes it.
$history = getQuizHistory($pdo, $userId);
?>

<?php if (empty($history)): ?>
    <div class="empty-history">
        <p>No quiz attempts found. Start your first quiz today!</p>
    </div>
<?php else: ?>
    <div class="history-list">
        <?php foreach ($history as $attempt): ?>
            <div class="history-item">
                <div class="hist-main">
                    <span class="hist-topic"><?php echo htmlspecialchars($attempt['topic']); ?></span>
                    <span class="hist-date"><?php echo date('M d, Y', strtotime($attempt['created_at'])); ?></span>
                </div>
                <div class="hist-stats">
                    <span class="hist-score"><?php echo $attempt['score']; ?>/<?php echo $attempt['total_questions']; ?></span>
                    <span class="hist-perc"><?php echo round($attempt['percentage']); ?>%</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<style>
.history-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: 20px;
}

.history-item {
    background: rgba(0, 0, 0, 0.2);
    border: 1px solid var(--glass-border);
    border-radius: 12px;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: transform 0.2s;
}

.history-item:hover {
    transform: translateX(5px);
    border-color: var(--primary);
}

.hist-main {
    display: flex;
    flex-direction: column;
}

.hist-topic {
    font-weight: 600;
    color: var(--text);
}

.hist-date {
    font-size: 0.8rem;
    color: #94a3b8;
}

.hist-stats {
    text-align: right;
    display: flex;
    flex-direction: column;
}

.hist-score {
    font-weight: 700;
    color: var(--primary);
}

.hist-perc {
    font-size: 0.85rem;
    color: var(--secondary);
}

.empty-history {
    text-align: center;
    padding: 30px;
    color: #94a3b8;
    background: rgba(0,0,0,0.1);
    border-radius: 12px;
    border: 1px dashed var(--glass-border);
}
</style>
