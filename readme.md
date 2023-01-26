# Catalogue Web GlowGuru

L'application doit avoir un système d'authentification avec au moins un rôle (Login : Admin), et doit gérer les autorisations de manière que seuls les utilisateurs authentifiés en tant qu'admin puissent accéder à l'espace de travail.

L'admin devra pouvoir gérer les produits cosmétiques (ajouter un nouveau, modifier les informations d'un produit existant, supprimer un produit).

![glowGuru flowchart](https://user-images.githubusercontent.com/86893073/212770908-368249a1-c0b5-4956-8a19-a7e4b67d9bc9.png)

Website Presenation 

![localhost_8000_ (1)](https://user-images.githubusercontent.com/86893073/214889652-83619c58-8017-4284-af72-fa0fcd456a7c.png)
![localhost_8000_admin_dashboard (1)](https://user-images.githubusercontent.com/86893073/214889134-0d173073-10d2-4130-99a9-fdc54d8ba0d3.png)
![localhost_8000_product_id=1](https://user-images.githubusercontent.com/86893073/214889129-58ccb709-56ef-4c23-816f-6aa8ed3b3032.png)
![localhost_8000_product](https://user-images.githubusercontent.com/86893073/214889133-1dff788a-9dea-4524-adb9-548fcc0c641b.png)
![localhost_8000_admin_login](https://user-images.githubusercontent.com/86893073/214889150-ed3d103b-1718-4c60-abbd-73c2ac9589fa.png)


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
