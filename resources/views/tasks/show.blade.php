<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
            background: #f4f4f4;
        }

        .task {
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        .task-item {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            margin-right: 10px;
            padding: 10px 15px;
            text-decoration: none;
        }

        .back {
            color: #0066cc;
        }

        .edit {
            background: #333;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h1>Task Details</h1>

    <div class="task">

        <div class="task-item">
            <div class="label">Task Name</div>
            <div>{{ $task->task_name }}</div>
        </div>

        <div class="task-item">
            <div class="label">Description</div>
            <div>{{ $task->description ?? 'No description' }}</div>
        </div>

        <div class="task-item">
            <div class="label">Status</div>
            <div>{{ $task->status }}</div>
        </div>

        <div class="task-item">
            <div class="label">Due Date</div>
            <div>{{ $task->due_date ?? 'No due date' }}</div>
        </div>

        <a href="{{ route('tasks.edit', $task) }}" class="edit">Edit Task</a>

        <a href="{{ route('tasks.index') }}" class="back">Back to Tasks</a>

    </div>

</body>
</html>