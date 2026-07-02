<!DOCTYPE html>
<html>
<head>
    <title>Admin Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-6xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">Feedback Management</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">

        @foreach($feedbacks as $fb)
            <div class="bg-white p-6 rounded-xl shadow flex justify-between items-center">

                <div>
                    <h3 class="font-bold text-lg">
                        {{ $fb->name }}
                    </h3>

                    <p class="text-gray-600">
                        {{ $fb->message }}
                    </p>

                    <small class="text-gray-400">
                        {{ $fb->email }}
                    </small>

                    <div class="mt-2">
                        @if($fb->approved)
                            <span class="text-green-600 font-semibold">Approved</span>
                        @else
                            <span class="text-yellow-600 font-semibold">Pending</span>
                        @endif
                    </div>
                </div>

                <div class="flex gap-3">

                    @if(!$fb->approved)
                        <a href="{{ route('feedback.approve', $fb->id) }}"
                           class="bg-green-600 text-white px-4 py-2 rounded">
                            Approve
                        </a>
                    @endif

                    <form action="{{ route('feedback.destroy', $fb->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-600 text-white px-4 py-2 rounded">
                            Delete
                        </button>
                    </form>

                </div>

            </div>
        @endforeach

    </div>

</div>

</body>
</html>