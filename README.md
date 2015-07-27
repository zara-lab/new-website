## How to sync my fork with ZaraLab repo

Go to your fork clone
```
cd new-website
```

Add `zara-lab/new-website` remote and fetch
```
git remote add upstream https://github.com/zara-lab/new-website.git
git fetch upstream
```

Merge `master` branch to your fork repo
```
git checkout master
git merge upstream/master
```

Or merge `gh-pages` branch to your fork repo
```
git checkout gh-pages
git merge upstream/gh-pages
```

Push to your repo
```
git push orign gh-pages
```
