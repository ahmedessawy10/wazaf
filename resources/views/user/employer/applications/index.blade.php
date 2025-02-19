<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <!-- External font (optional for better styling) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 36px;
        }
        .application {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .application h4 {
            font-size: 24px;
            font-weight: 500;
            color: #007bff;
        }
        .application p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }
        .form-container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container button:hover {
            background-color: #218838;
        }
        .form-container button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

    <h1>Accepted Applications</h1>

    @if($applications->isEmpty())
        <p style="text-align: center; font-size: 18px; color: #555;">No applications to display.</p>
    @else
        @foreach($applications as $application)
            <div class="application">
                <h4>{{ $application->candidate->user->name }} - {{ $application->jobPosition->title }}</h4>
                <p>{{ $application->cover_letter }}</p>

                <div class="form-container">
                    <form action="{{ route('employer.applications.approve', $application->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit"  >Approve Application</button>
                    </form>
                    <form action="{{ route('employer.applications.reject', $application->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" style="background-color: #dc3545;">Reject</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

</body>
</html>
