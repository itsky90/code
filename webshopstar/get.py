import requests as re
from bs4 import BeautifulSoup
import urllib,os

r = re.get('http://shopstars.myzozo.net')
soup = BeautifulSoup(r.text, 'html.parser')

print soup
#for i in soup.head.find_all('link'):
#    l =  'http://shopstars.myzozo.net/'+i.get('href')
#    name = i.get('href').split('/')[-1]
#    _dir = os.path.dirname(i.get('href'))
#    root_dir = os.getcwd()
#    try:
#        os.makedirs(_dir)
#    except:
#        pass
#    os.chdir(_dir)
#    print "downloading " + i.get('href')
#    urllib.urlretrieve(l, name)
#    os.chdir(root_dir)
#
#for i in soup.head.find_all('script'):
#    l = 'http://shopstars.myzozo.net/'+i.get('src')
#    name = i.get('src').split('/')[-1]
#    _dir = os.path.dirname(i.get('src'))
#    root_dir = os.getcwd()
#    try:
#        os.makedirs(_dir)
#    except:
#        pass
#    os.chdir(_dir)
#    print "downloading " + i.get('src')
#    urllib.urlretrieve(l, name)
#    os.chdir(root_dir)
#
#
#print soup.head



