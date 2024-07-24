# Consigne

> ### Nous avons géré les animaux qui savent nager. À toi de jouer maintenant, fais la même chose avec ceux sachant voler !

> ### 1. Crée l'interface Flyable contenant une méthode fly() qui retourne un string.
>### 2. Tous les oiseaux ne volant pas, il n'est pas pertinent d'implémenter Flyable      directement sur Bird. Tu vas passer Bird en classe abstraite puis créer les classe filles suivantes depuis Bird. Pour chacune des classes, crée un objet correspondant dans index.php, les images sont disponibles, et ajoute les à ton zoo :
>### - Parrot 🦜 qui implémentera Flyable. Dans ce cas il faut modifier l'objet Bird (maintenant classe abstraite) dans index.php pour utiliser cette nouvelle classe Parrot.
>### - Penguin 🐧 (c'est le manchot en français, c'est un faux ami, car le pingouin, auk en anglais, vole bien lui) : ton manchot implémentera Swimmable mais pas Flyable.
>### - Ostrich 🦤 qui n'implémentera pas Flyable.
>### - Duck 🦆 qui implémentera Flyable et Swimmable.
>### 3. Implémente aussi Flyable sur les insectes 🪰 (en réalité, tous les insectes ne volent pas, mais nous allons simplifier pour l'exercice, cependant si tu cherches l'exactitude biologique, libre à toi de créer une classe fille Pterygota (correspondant aux insectes volant) qui elle implémentera Flyable et non Insect.
>### 4. Crée la classe Bat 🦇, fille de Mammal, qui implémentera également Flyable.
>### 🖥️ Dès que l'interface Flyable est créée, un nouveau bouton "Try to Fly" apparaît en plus de "Try to Swim".