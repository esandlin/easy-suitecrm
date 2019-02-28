Question: Are git submodules compatible with Heroku one click deploy

Links:
- https://devcenter.heroku.com/articles/heroku-button
- https://devcenter.heroku.com/articles/app-json-schema
- https://devcenter.heroku.com/articles/git-submodules

Answer: No. In short, 1 click deploy works by pulling a tarball of the repo from
github and that does not include the contents of submodules.

Furthermore, I tried a few workarounds to no avail. Notably, heroku allows for
postdeploy scripts but this is of no help because pulling in the files at this
time is a lost cause due to herokus file system being ephemoral storage. Meaning
in short order anything you pull in will be lost.

As such the solution going forward is probably going to be to commit the files
directly to this repo.
