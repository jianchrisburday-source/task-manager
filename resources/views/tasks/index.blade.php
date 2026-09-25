<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
            background: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }

        .status {
            font-weight: bold;
        }

        .actions a,
        .actions button {
            margin-right: 5px;
        }

        .actions a {
            color: #0066cc;
        }

        .delete-btn {
            color: #cc0000;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            font-size: inherit;
        }
    </style>
</head>

<body>

    <h1>Personal Task Manager</h1>

    <a href="{{ route('tasks.create') }}" class="btn">+ Add New Task</a>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if ($tasks->count())
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->task_name }}</td>

                        <td>
                            {{ $task->description ?? 'No description' }}
                        </td>

                        <td class="status">
                            {{ $task->status }}
                        </td>

                        <td>
                            {{ $task->due_date ?? 'No due date' }}
                        </td>

                        <td class="actions">
                            <a href="{{ route('tasks.show', $task) }}">View</a>

                            <a href="{{ route('tasks.edit', $task) }}">Edit</a>

                            <form action="{{ route('tasks.destroy', $task) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="delete-btn"
                                        onclick="return confirm('Are you sure you want to delete this task?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tasks yet. Click <strong>Add New Task</strong> to create your first task.</p>
    @endif

</body>
</html>