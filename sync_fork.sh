#!/bin/bash

# Variables à personnaliser
MAIN_BRANCH="main"  # Branche principale, change si nécessaire
UPSTREAM_URL="https://github.com/jlevers/selling-partner-api.git"  # URL du dépôt original

# Aller dans le répertoire de ton dépôt local
#cd /chemin/vers/ton/fork || exit

# Ajouter le dépôt original comme remote si ce n'est pas déjà fait
if ! git remote | grep -q "upstream"; then
    git remote add upstream "$UPSTREAM_URL"
    echo "Remote 'upstream' ajouté : $UPSTREAM_URL"
fi

# Récupérer les dernières modifications depuis le dépôt original
git fetch upstream

# Assurer que nous sommes sur la branche principale
git checkout "$MAIN_BRANCH"

# Vérifier la dernière version dans le dépôt original
LATEST_VERSION=$(git ls-remote --tags upstream | grep -o 'refs/tags/v[0-9.]*' | sort -V | tail -n1 | sed 's/refs\/tags\///')

# Si une version a été trouvée, fusionner cette version
if [ -n "$LATEST_VERSION" ]; then
    echo "Dernière version trouvée : $LATEST_VERSION"
    # Fusionner les modifications de la version
    git merge "upstream/$MAIN_BRANCH" -m "Merge changes from upstream $LATEST_VERSION"
else
    echo "Aucune version trouvée dans le dépôt original."
fi

# Pousser les modifications sur le fork
git push origin "$MAIN_BRANCH"

echo "Votre fork est maintenant synchronisé avec la dernière version $LATEST_VERSION du dépôt original."
