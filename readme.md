# Catalogue Web GlowGuru

L'application doit avoir un système d'authentification avec au moins un rôle (Login : Admin), et doit gérer les autorisations de manière que seuls les utilisateurs authentifiés en tant qu'admin puissent accéder à l'espace de travail.

L'admin devra pouvoir gérer les produits cosmétiques (ajouter un nouveau, modifier les informations d'un produit existant, supprimer un produit).

![glowGuru flowchart](https://user-images.githubusercontent.com/86893073/212770908-368249a1-c0b5-4956-8a19-a7e4b67d9bc9.png)

## Database Digram 

![Class_Diagram](https://user-images.githubusercontent.com/86893073/213885915-021a215d-be6d-4392-8c20-1b19313bed6c.jpg)

![Use_Case](https://user-images.githubusercontent.com/86893073/213885913-a5bfac61-a8cd-4e5e-8a97-3ca4c2057416.jpg)



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
