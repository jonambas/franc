set -x
git init
git remote add deploy "travis@192.241.253.33:/var/www/html/wp-content/themes/franc"
git config user.name "Travis CI"
git config user.email "jon+travisCI@jonambas.com"

git add -A
git commit -m "Deploying to staging"
git push --force deploy master
