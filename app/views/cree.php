<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/resources/images/store-solid.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/010538ecba.js" crossorigin="anonymous"></script>
</head>

<body class="font-[poppins] flex flex-col items-center justify-center min-h-screen bg-gray-100">

    <h1 class="text-2xl font-semibold mb-5">Ajouter un produit</h1>
    
    <form action="../views/ajouter.php" method="post" class="bg-white p-6 rounded-lg shadow-md w-96">
        <label class="block mb-2">Nom du produit :</label>
        <input type="text" name="nom" required class="w-full p-2 border rounded-lg mb-3">

        <label class="block mb-2">Prix :</label>
        <input type="number" name="prix" required class="w-full p-2 border rounded-lg mb-3">

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Ajouter <i class="fa-solid fa-plus ml-2"></i>
        </button>
    </form>

</body>
</html>
