<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter | Laravel 12</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-50 via-white to-purple-50 font-sans">

<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <!-- Glassmorphism Card -->
    <div class="bg-white/80 backdrop-blur-md shadow-2xl rounded-3xl w-full max-w-md p-10">
        <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-4 drop-shadow-md">
            Currency Converter
        </h1>
        <p class="text-center text-gray-500 mb-8">
            Convert between USD, INR, EUR with current exchange rates
        </p>

        <form method="POST" action="/convert" class="space-y-6">
            @csrf

            <!-- Amount Input -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Amount</label>
                <input type="number" name="amount" value="{{ $amount ?? '' }}" required
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 shadow-sm hover:shadow-md">
            </div>

            <!-- From & To Dropdown -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">From</label>
                    <select name="from" 
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 shadow-sm hover:shadow-md">
                        <option value="USD" {{ ($from ?? '') == 'USD' ? 'selected' : '' }}>USD</option>
                        <option value="INR" {{ ($from ?? '') == 'INR' ? 'selected' : '' }}>INR</option>
                        <option value="EUR" {{ ($from ?? '') == 'EUR' ? 'selected' : '' }}>EUR</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">To</label>
                    <select name="to" 
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 shadow-sm hover:shadow-md">
                        <option value="USD" {{ ($to ?? '') == 'USD' ? 'selected' : '' }}>USD</option>
                        <option value="INR" {{ ($to ?? '') == 'INR' ? 'selected' : '' }}>INR</option>
                        <option value="EUR" {{ ($to ?? '') == 'EUR' ? 'selected' : '' }}>EUR</option>
                    </select>
                </div>
            </div>

            <!-- Convert Button -->
            <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                Convert
            </button>
        </form>

        <!-- Result Card -->
        @if(isset($converted))
            <div class="mt-6 p-6 bg-green-50 border-l-4 border-green-400 rounded-xl text-center shadow-inner">
                <h2 class="text-xl font-semibold text-green-700">Converted Amount</h2>
                <p class="text-3xl font-bold text-green-900 mt-2">{{ $converted }}</p>
            </div>
        @endif
    </div>
</div>

</body>
</html>