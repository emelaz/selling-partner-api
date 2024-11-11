#!/bin/bash

# Variables à personnaliser
UPSTREAM_URL="https://github.com/jlevers/selling-partner-api.git"  # URL du dépôt original
BRANCH_TO_SYNC="main"  # Branche principale locale (à garder pour les opérations de fusion)

# Aller dans le répertoire de ton dépôt local
#cd /chemin/vers/ton/fork || exit

# Ajouter le dépôt original comme remote si ce n'est pas déjà fait
if ! git remote | grep -q "upstream"; then
    git remote add upstream "$UPSTREAM_URL"
    echo "Remote 'upstream' ajouté : $UPSTREAM_URL"
fi

# Récupérer les dernières modifications depuis le dépôt original
git fetch upstream --tags

# Trouver le dernier tag de la version 5.x
LATEST_VERSION=$(git ls-remote --tags upstream | grep -o 'refs/tags/v5\.[0-9]*' | sort -V | tail -n1 | sed 's/refs\/tags\///')

# Vérifier si un tag correspondant a été trouvé
if [ -n "$LATEST_VERSION" ]; then
    echo "Dernière version trouvée pour la version 5.x : $LATEST_VERSION"

    # Assurer que nous sommes sur la branche locale pour fusionner
    git checkout "$BRANCH_TO_SYNC"

    # Fusionner les modifications du tag spécifique dans la branche locale
    git merge "upstream/$LATEST_VERSION" -m "Merge changes from upstream $LATEST_VERSION"

    # Pousser les modifications sur le fork
    git push origin "$BRANCH_TO_SYNC"
    echo "Votre fork est maintenant synchronisé avec la dernière version $LATEST_VERSION de la version 5.x du dépôt original."
else
    echo "Erreur : Aucun tag correspondant à la version 5.x trouvé dans le dépôt original."
fi
