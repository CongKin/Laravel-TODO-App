<x-layout>
    <div>
        <h1>Task {{ $task->created_at->format('Y-m-d')}}</h1>
        <div>
            <div>
                <p><strong>Task:</strong></p>
                <p>{{ $task->task }}</p>
            </div>
            <div>
                <p><strong>Description:</strong></p>
                <p>{{ $task->description }}</p>
            </div>
            <div>
                <p><strong>Status:</strong></p>
                <p>
                    @if($task->status == '1')
                        Pending
                    @elseif($task->status == '2')
                        In Progress
                    @else
                        Completed
                    @endif
                </p>
            </div>
            <div>
                <p><strong>Priority:</strong></p>
                <p>
                    @if($task->priority == '1')
                        Low
                    @elseif($task->priority == '2')
                        Medium
                    @else
                        High
                    @endif
                </p>
            </div>
            <div>
                <p><strong>Due Date:</strong></p>
                <p>{{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('Y-m-d') : 'No deadline' }}</p>
            </div>
        </div>
    </div>
</x-layout>
