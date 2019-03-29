<?php foreach ($tasks as $task) : ?>
<div class="task-item">
    <div>
        <?php echo $task->title; ?>
    </div>
    <div>
        <input type="text" placeholder="time">
    </div>
    <div>
        <button class="time-log">Log Time</button>
    </div>
</div>
<?php endforeach; ?>