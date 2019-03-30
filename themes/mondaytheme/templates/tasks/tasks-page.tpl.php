<?php foreach ($tasks as $task) : ?>
<div class="task-item" my-id="<?php echo $task->nid; ?>">
    <div class="title">
        <?php echo l($task->title, 'node/'. $task->nid); ?>
    </div>
    <div class="status <?php echo convert_to_class($task->status); ?>">
        <?php echo $task->status; ?>
    </div>
    <div class="priority <?php echo convert_to_class($task->priority); ?>">
        <?php echo $task->priority; ?>
    </div>
    <div class="timespent">
        <?php echo $task->timespent; ?>
    </div>
    <div class="time">
        <input type="number" placeholder="Mins" class="txt-time">
    </div>
    <div class="time-update">
        <button class="time-log btn">Log Time</button>
    </div>
</div>
<?php endforeach; ?>