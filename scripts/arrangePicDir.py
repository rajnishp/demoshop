import os
import errno
import shutil
from os import listdir
from os.path import isfile, join

def checkNMakeDir(path):
	if not os.path.exists(directory):
    	os.makedirs(directory)


def copyFile(src,des):	
	shutil.copy2(src, des)


def getFileOneFileName(mypath):
	onlyfiles = [ f for f in listdir(mypath) if isfile(join(mypath,f)) ]
	return onlyfiles[0]

# get productname and sku
# create folder in media with productname_sku
# move the file to from current product dir to new dir

f = open("skuProductList.txt")

for line in f:
    lineArr = line.split(',')
    newDir = "media/" + lineArr[1] + "_" + lineArr[0]
    oldDir = "myDirectory/" + 
    fileName = getFileOneFileName()
    try:
      checkNMakeDir(newDir)

    except IOError, e:
        continue

f.close
