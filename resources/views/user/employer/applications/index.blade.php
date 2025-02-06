<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
</head>
<body>
    <h1>Pending Applications</h1>
    @foreach($pendingApplications as $application)
        <div class="application">
            <h4>{{ $application->candidate->user->name }} - {{ $application->jobPosition->title }}</h4> <!-- Changed jobListing to jobPosition -->
            <p>{{ $application->cover_letter }}</p>
            <a href="{{ route('employer.applications.show', $application->id) }}">View Details</a>

            <form action="{{ route('employer.applications.approve', $application->id) }}" method="POST" style="display:inline-block;">
                @csrf
                <button type="submit">Approve</button>
            </form>
            <form action="{{ route('employer.applications.reject', $application->id) }}" method="POST" style="display:inline-block;">
                @csrf
                <button type="submit">Reject</button>
            </form>
        </div>
    @endforeach

    <h1>Accepted Applications</h1>
    @foreach($acceptedApplications as $application)
        <div class="application">
            <h4>{{ $application->candidate->user->name }} - {{ $application->jobPosition->title }}</h4> <!-- Changed jobListing to jobPosition -->
            <p>{{ $application->cover_letter }}</p>
            <a href="{{ route('employer.applications.show', $application->id) }}">View Details</a>

            <form action="{{ route('employer.applications.reject', $application->id) }}" method="POST" style="display:inline-block;">
                @csrf
                <button type="submit">Reject</button>
            </form>
        </div>
    @endforeach
</body>
</html>
