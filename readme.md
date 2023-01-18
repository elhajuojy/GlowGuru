# Catalogue Web GlowGuru

L'application doit avoir un système d'authentification avec au moins un rôle (Login : Admin), et doit gérer les autorisations de manière que seuls les utilisateurs authentifiés en tant qu'admin puissent accéder à l'espace de travail.

L'admin devra pouvoir gérer les produits cosmétiques (ajouter un nouveau, modifier les informations d'un produit existant, supprimer un produit).

![glowGuru flowchart](https://user-images.githubusercontent.com/86893073/212770908-368249a1-c0b5-4956-8a19-a7e4b67d9bc9.png)

## Database Digram 

![Database](https://raw.githubusercontent.com/elhajuojy/GlowGuru/glowGuru_master/website/assets/db.png?token=GHSAT0AAAAAAB2VGJHHUAYVXZD5QFAV6GZAY6H4H7Q)

Install requirements:

run this

```bash
> docker-compose up --build  
```

after you run this command

```bash
> cd website 
> composer install 
```

the project running on

mysql

```bash
> http://localhost:9001/
```

php

```bash
> http://localhost:9000/
```

Do not forget to create your **.env** file and set your values check the config.php file
