dans se tp j'ai pratique les formulair en symfony .
au debut le creation d'un services AddToCartType qui herite de AbstractType pour nous permet de redefine la methode buildForm qui permet de 
construire la structure du formulaire.
dans cette methode pour ajouter des champs en fait  ->add() avec le nom du champs et le types et des autre option .
puis la creation d'un controller creer une function et dans cette function en fait apple a $this->createForm(AddToCartType::class);qui permet de 
crée un formulaire Symfony prêt à être affiché et traité.
puis la creation de la template twig avec form_start(form) et form_label pour label et form_widget pour input et finalment form_end
apres la creation d'une autre template pour personalisation en le creer dans des block form_row qui sert à personnaliser l’affichage d’un champ
de formulaire Symfony avec Bootstrap, en incluant le label, l’input et les éventuelles erreurs .S
et dans twig.yaml on définir les templates qui vont gérer le rendu des formulaires Symfony.
