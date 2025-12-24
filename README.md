TP : Pratique des formulaires Symfony

Création d’un service AddToCartType

Hérite de AbstractType.

Permet de redéfinir la méthode buildForm(), qui sert à construire la structure du formulaire.

Pour ajouter des champs, on utilise la méthode ->add() avec :

le nom du champ,le type,et d’autres options éventuelles.

Création du controller:

On crée une fonction dans le controller.

Dans cette fonction, on appelle :

$this->createForm(AddToCartType::class);
Cela permet de créer un formulaire Symfony prêt à être affiché et traité.

Création du template Twig:
Pour afficher le formulaire :

{{ form_start(form) }}   {# début du formulaire #}
{{ form_label(form.champ) }}  {# label du champ #}
{{ form_widget(form.champ) }} {# champ input #}
{{ form_end(form) }}     {# fin du formulaire #}


Personnalisation du formulaire

On peut créer un autre template Twig avec un block form_row pour personnaliser l’affichage d’un champ.

Ce bloc inclut le label, l’input et les éventuelles erreurs.

On peut utiliser Bootstrap pour le style.

Configuration dans twig.yaml

On définit les templates qui vont gérer le rendu des formulaires Symfony.
