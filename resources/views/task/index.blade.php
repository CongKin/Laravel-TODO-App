<x-layout>
    <div class="task-container">
        <a href="#" class="new-task-btn">
            New Task
        </a>
        <table class="row100 head">
            <thead>
                <tr class="row100 head">
                    <th class="cell100 column1">Task</th>
                    <th class="cell100 column2">Status</th>
                    <th class="cell100 column3">Priority</th>
                    <th class="cell100 column4">Due Date</th>
                    <th class="cell100 column5">Creation Date</th>
                    <th class="cell100 column6">Function</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="row100 body">
                        <td class="cell100 column1">{{ Str::words($task->task, 30)}}</td>
                        <td class="cell100 column2">
                            @if($task->status == '1')
                                Pending
                            @elseif($task->status == '2')
                                In Progress
                            @else
                                Completed
                            @endif
                        </td>
                        <td class="cell100 column3">
                            @if($task->priority == '1')
                                Low
                            @elseif($task->priority == '2')
                                Medium
                            @else
                                High
                            @endif
                        </td>
                        <td class="cell100 column4">{{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('Y-m-d') : 'No deadline' }}</td>
                        <td class="cell100 column5">{{ $task->created_at->format('Y-m-d') }}</td>
                        <td class="cell100 column6">Function</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
