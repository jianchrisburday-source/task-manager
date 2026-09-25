<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
            background: #f4f4f4;
        }

        form {
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
        }

        button, a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            text-decoration: none;
        }

        button {
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .back {
            color: #0066cc;
        }

        .error {
            color: #cc0000;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <h1>Edit Task</h1>

    @if ($errors->any())
        <div class="error">
            <strong>Please fix the following:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="task_name">Task Name</label>
        <input
            type="text"
            id="task_name"
            name="task_name"
            value="{{ old('task_name', $task->task_name) }}"
            required
        >

        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
        >{{ old('description', $task->description) }}</textarea>

        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="Pending"
                {{ old('status', $task->status) == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Completed"
                {{ old('status', $task->status) == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>
        </select>

        <label for="due_date">Due Date</label>
        <input
            type="date"
            id="due_date"
            name="due_date"
            value="{{ old('due_date', $task->due_date) }}"
        >

        <button type="submit">Update Task</button>

        <a href="{{ route('tasks.index') }}" class="back">Cancel</a>
    </form>

</body>
</html>