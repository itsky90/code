import requests as re
from bs4 import BeautifulSoup
import urllib

r = re.get('http://shopstars.myzozo.net')
soup = BeautifulSoup(r.text, 'html.parser')

for i in soup.head.find_all('link'):
    l =  'http://shopstars.myzozo.net/'+i.get('href')
    name = i.get('href').split('/')[-1]
    print name
    print "downloading " + name
    urllib.urlretrieve(l, name)

for i in soup.head.find_all('script'):
    print 'http://shopstars.myzozo.net/'+i.get('src')


#print soup.head



