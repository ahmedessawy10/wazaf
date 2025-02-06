<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Details</title>
</head>
<body>
    <h1>Application Details</h1>

    <h2>Candidate Information</h2>
    <p><strong>Name:</strong> {{ $application->candidate->user->name }}</p>
    <p><strong>Email:</strong> {{ $application->candidate->user->email }}</p>
    <p><strong>Phone:</strong> {{ $application->candidate->phone }}</p>
    <p><strong>Resume:</strong> <a href="{{ asset('storage/' . $application->candidate->resume) }}" target="_blank">View Resume</a></p>
    <p><strong>Cover Letter:</strong> {{ $application->cover_letter }}</p>

    <h3>Job Information</h3>
    <p><strong>Job Title:</strong> {{ $application->jobPosition->title }}</p> <!-- Changed jobListing to jobPosition -->
    <p><strong>Job Description:</strong> {{ $application->jobPosition->description }}</p>

    <form action="{{ route('employer.applications.approve', $application->id) }}" method="POST" style="display:inline-block;">
        @csrf
        <button type="submit">Approve</button>
    </form>
    <form action="{{ route('employer.applications.reject', $application->id) }}" method="POST" style="display:inline-block;">
        @csrf
        <button type="submit">Reject</button>
    </form>

    <br><br>
    <a href="{{ route('employer.applications.index') }}">Back to Applications</a>
</body>
</html>
