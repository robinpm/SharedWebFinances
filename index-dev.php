<!DOCTYPE html>

<?php include 'header-dev.php' ?>


<body class='bg-purple-900'>

    <div class="flex justify-center">
        <div class="">
            <div class="justify-center">
                <h1>Shared Expenses Input | <?php echo date('F Y'); ?> </h1>

                <div class="justify-center bg-blue-100 rounded mx-10">
                    <form action="./gogo.php" method="post">
                        <div class="mb-6">
                            <input class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full" type="text" name="name" placeholder="Who are you?">
                        </div>
                        <div class="mb-6">
                            <input class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full" id="today" type="date" name="date">
                        </div>
                        <div class="mb-6">
                            <input class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full" type="text" name="description" placeholder="What did you buy?">
                        </div>
                        <div class="mb-6">
                            <input class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full" type="number" step="0.01" id="price" pattern="^\d*(\.\d{0,2})?$" title="Insert a price! (00.000" name="amount" placeholder="How much was it?">
                            <!-- <i>$</i> -->
                        </div>
                        <div class="mb-6">
                            <input class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full" type="text" name="notes" placeholder="Anything else?">
                        </div>
                        <button class="py-3 px-12 bg-red-600 hover:bg-red-800 mr-5 rounded-md text-white text-lg focus:outline-none w-full" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>