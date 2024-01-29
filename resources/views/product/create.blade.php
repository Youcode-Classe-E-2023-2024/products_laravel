<script src="https://cdn.tailwindcss.com"></script>

<form action="{{ route('products.store') }}" method="POST" class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    @csrf
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <!-- ... (rest of your form code) ... -->
        <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <div class="flex flex-col">
                    <label class="leading-loose">Product Title</label>
                    <input type="text" name="name" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Product title" required>
                </div>
                <div class="flex flex-col">
                    <label class="leading-loose">Description Title</label>
                    <textarea name="description" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Product description" required></textarea>
                </div>
                <div class="flex flex-col">
                    <label class="leading-loose">Quantite</label>
                    <input type="text" name="quantite" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                </div>
                <div class="flex flex-col">
                    <label class="leading-loose">Price</label>
                    <input type="text" name="price" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                </div>
            </div>
            <div class="pt-4 flex items-center space-x-4">
                <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                </button>
                <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
            </div>
        </div>
    </div>
</form>
