<h1>Cake Hub</h1>

Our client's business specializes in a wide variety of flavor desserts; it's your one-stop shop for dreamy sweets that entice your palate and comfort your spirit. We take great pride in creating confections using the best ingredients and artistic flair, making each delicacy a gourmet masterpiece.

---

<h2>Contents</h2>

<!--toc:start-->
- [Contributing](#contributing)
  - [Git](#git)
    - [Downloadable](#downloadable)
    - [Website](#website)
    - [Videos](#videos)
    - [Application](#application)
  - [Folder/File Structure](#folderfile-structure)
    - [Buyer Folder](#buyer-folder)
    - [Config Folder](#config-folder)
    - [CSS Folder](#css-folder)
    - [Helpers Folder](#helpers-folder)
    - [Image Folder](#image-folder)
    - [Inc Folder](#inc-folder)
    - [Seller Folder](#seller-folder)
    - [Root Directory](#root-directory)
    - [Extra Folders/Files](#extra-foldersfiles)
    - [Notes](#notes)
  - [Issues](#issues)
- [Products](#products)
  - [Types of Cakes](#types-of-cakes)
- [Plan](#plan)
  - [Captivating Homepage](#captivating-homepage)
    - [Hero Image](#hero-image)
    - [Clear Value Proposition](#clear-value-proposition)
  - [Enticing Menu Page](#enticing-menu-page)
    - [Categorized Offerings](#categorized-offerings)
    - [Highlight Specialties](#highlight-specialties)
  - [Building Trust and Engagement](#building-trust-and-engagement)
    - [About Us Page](#about-us-page)
  - [Ordering and Contact](#ordering-and-contact)
    - [Seamless Ordering System](#seamless-ordering-system)
    - [Contact Information](#contact-information)
    - [Consider Online Delivery](#consider-online-delivery)
  - [Dessert Ideas](#dessert-ideas)
    - [Cakes](#cakes)
- [Database Structure](#database-structure)
  - [Entity Relationship Diagram](#entity-relationship-diagram)
    - [User](#user)
    - [Seller](#seller)
    - [Customer](#customer)
    - [Product](#product)
    - [Cart](#cart)
    - [Order](#order)
<!--toc:end-->

---

## Contributing

### Git

If you are new to using git, here are some useful resources to get started

#### Downloadable

- [Git cheat sheet (pdf)](https://wac-cdn.atlassian.com/dam/jcr:e7e22f25-bba2-4ef1-a197-53f46b6df4a5/SWTM-2088_Atlassian-Git-Cheatsheet.pdf?cdnVersion=1457)

#### Website

- [Atlassian](https://www.atlassian.com/git)

#### Videos

- [Git Explained in 100 Seconds](https://www.youtube.com/watch?v=hwP7WQkmECE) (1:56)
- [Git It? How to use Git and Github](https://www.youtube.com/watch?v=HkdAHXoRtos) (12:18)
- [Git Tutorial for Dummies](https://www.youtube.com/watch?v=mJ-qvsxPHpY) (19:24)

#### Application

- [Github Desktop](https://desktop.github.com/)

### Folder/File Structure

```
┌cake_hub
├── buyer
│   ├── index.php
│   ├── login.php
│   ├── profile.php
├── config
│   ├── config.php
│   ├── connect.php
├── css
│   ├── style.css
├── helpers
│   ├── login_helper.php
│   ├── session_helper.php
│   ├── url_helper.php
├── img
│   ├── *.jpg
│   ├── *.png
├── inc
│   ├── footer.php
│   ├── header.php
│   ├── navbar.php
├── seller
│   ├── index.php
│   ├── login.php
│   ├── profile.php
├── about.php
├── bootstrap.php
├── contact.php
├── index.php
├── menu.php
└── register.php
```

This is the folder structure of the project, all php files already have header/footer layout included in them.

Additional folder/files for CRUD will be added in the future.

```
<?php
require_once 'bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<!-- Content here -->
<!-- End of content -->
<?php include APPROOT.'/inc/footer.php'; ?>
```
Just add the content inbetween the header and php includes.
```
<?php
require_once 'bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<h1>Sample content</h1>
<p>Kuya aikhen is my eyeballs!</p>
<?php include APPROOT.'/inc/footer.php'; ?>
```
Like so.

- #### Buyer Folder

Contains buyer-specific pages such as their overview(index), login, and profile page.

- #### Config Folder

Contains initial config files for php, such as a file defining variable names for later use and a connect file for initial connection.

- #### CSS Folder

Contains style.css, unused as the project will be using Bootstrap as CSS framework.

- #### Helpers Folder

Contains files for Folder for helper functions.

- #### Image Folder

Contains images to be displayed on the website.

- #### Inc Folder

Contains layouts for header, footer and navbar.

- #### Seller Folder

Contains seller-specific pages such as their overview(index), login, and profile page.

- #### Root Directory

Contains pages that do not require logging in to be displayed.

- #### Extra Folders/Files

Extra folders and files will be added as the project progresses.

- #### Notes

bootstrap.php is NOT the Bootstrap framework, it is only there to include all the required files such config.php and files in helpers/.

### Issues

Submit an issue on the repository page if you find any problems that need fixing.

---

## Products

Our client’s business specializes in desserts such as cakes. Cake flavors include strawberry, chocolate, caramel, and vanilla.

### Types of Cakes

- Bento Cakes
- Bento Grande
- Flower Bento Box

## Plan

### Captivating Homepage

#### Hero Image

A mouthwatering photo showcasing your most popular cake or a beautiful arrangement of specialty cakes.</p>

#### Clear Value Proposition

Briefly introduce your shop and highlight what makes it special.

### Enticing Menu Page

#### Categorized Offerings

Separate sections for cakes with clear descriptions and high-quality photos.

#### Highlight Specialties

Feature your signature desserts or seasonal creations with detailed descriptions and enticing names.

### Building Trust and Engagement

#### About Us Page

Share your story, introduce your team, and showcase your passion for baking.

### Ordering and Contact

#### Seamless Ordering System

Offer online ordering with secure payment options and clear delivery/pick-up instructions.

#### Contact Information

Provide your address, phone number, email, and social media links.

#### Consider Online Delivery

Partner with a delivery service to expand your reach.

### Dessert Ideas

#### Cakes

- Classic flavors (chocolate, vanilla, caramel)
- Seasonal variations
- Specialty cakes (Bento Cake, Bento Grande Cake, Flower Bento Box)
- Themed cakes for occasions.

---

## Database Structure

### Entity Relationship Diagram

```
erDiagram
  user {
    INT id PK
    VARCHAR username UQ
    VARCHAR password
    VARCHAR first_name
    VARCHAR last_name
    VARCHAR email UQ
    VARCHAR contact_number
    VARCHAR address
  }
  customer {
    INT user_id FK
  }
  seller {
    INT user_id FK
  }
  product {
    INT id PK
    INT seller_id FK
    VARCHAR name
    VARCHAR description
    double price
  }
  cart {
    INT customer_id PK, FK
    INT product_id PK, FK
    INT quantity
    double total_price
  }
  order {
    INT id PK
    INT customer_id FK
    INT product_id FK
    VARCHAR status
  }

  user ||--|| seller : is
  user ||--|| customer : is
  seller ||--o{ product : sells
  customer ||--|{ cart : has
  product ||--o{ cart : added
  cart ||--|{ order : checkout
```
#### User

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | id | PK |
| VARCHAR | username |
| VARCHAR | password |
| VARCHAR | first_name |
| VARCHAR | last_name |
| VARCHAR | email |
| VARCHAR | contact_number |
| VARCHAR | address |

#### Seller

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | user_id | FK |

#### Customer

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | user_id | FK |

#### Product

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | id | PK |
| INT | seller_id | FK |
| VARCHAR | name |
| VARCHAR | description |
| DOUBLE | price |

#### Cart

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | customer_id | PK, FK |

#### Order

| Datatype | Column name | Constraint/s |
| --- | --- | --- |
| INT | id | PK |
| INT | customer_id | FK |
| INT | product_id | FK |
| VARCHAR | status |
