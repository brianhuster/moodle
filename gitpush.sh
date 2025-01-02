#!/bin/bash

for i in {a..z}; do
  git add ".$i*"
  git commit -m "update"
  git push
done
