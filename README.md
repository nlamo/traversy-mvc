# traversy-mvc
Code for a PHP OOP/MVC course taught by Brad Traversy.

Purpose of this is strictly as a basis for improving my knowledge of PHP. I may modify it (and add to it) in the future if I choose to use PHP consistently, but most modern stacks don't use PHP and so it's less likely.

But in terms of my education, it's quite useful. It keeps me thinking in MVC-terms, even as it becomes increasingly likely that I shift my focus toward the component-based (React) front-end paradigm.

**********
Overview
**********

- In order to run and utilise this MVC framework, you need a PHP server. I use XAMMP. It's easy to get started with.
- The public/.htaccess file will need to have the 'RewriteBase /traversy-mvc/public' changed according to whatever directory you're running your website/application from.
- Normally - though certainly not always - the database model is created first. Once you have an SQL database ready to go, you can connect to it by correctly setting config definitions in config/config.php.
- Any models within /model will be created as classes (with any relevant methods), and each will use new Database() instances to perform various database operations. 
- In views/ the inc/header.php and inc/footer.php files are simply included within any of the actual *views* created in /pages. This is just to keep code somewhat DRY.
- The controllers/Pages.php file will be used to *pass data into the view*. You'll notice that the method names for this 'Pages' class correspond to the names of the views (UIs) in views/pages.
- Any controller, such as the one just mentioned, will extend the libraries/Controller.php file, which itself will load a model from /model, and will require the view if it exists.