########## Facebook API Test - facebookAPITest.py ##########

## Original Author: John Zeller

## Description: This API test script simply demonstrates the access of information
##              from this particular API. The required format to run this program
##              is 'python facebookAPITest.py Penny4NASA', where Penny4NASA is some
##              page name on Facebook. The output is a simple HTML file called
##              'test.html'. Currently this test only demonstrates the display of
##		pretty basic page information. Look at the Facebook API documentation
##		for details on finding more information.


import sys
import urllib2
import simplejson
import webbrowser


def getPageID():
    args = sys.argv
    if len(args) != 2:
        print "Needs format: python testFacebookAPI.py PennyForNASA -- Where PennyForNASA is some page name/id"
    try:
        pageID = str(args[1])
    except:
        print "Needs format: python testFaceboojAPI.py PennyForNASA -- Where PennyForNASA is some page name/ids"
    return pageID


def createHTMLFile():
	file = open('test.html', 'w+')
	return file


def openInBrowser(f):
	new = 2 # Open in a new tab, if possible
	url = "./" + f.name
	webbrowser.open(url,new=new)

if __name__ == '__main__':
	urlAddr = "http://graph.facebook.com/"
	pageID = getPageID()

	request = urlAddr + pageID

	req = urllib2.urlopen(request)
	result = simplejson.load(req)
	f = createHTMLFile()
	f.write("<html><head><title>Facebook Results</title></head><body><table>")

	for key in result.keys():
		try:
			line = "<tr><td style='padding-right:30px'>" + key + "</td><td>" + str(result[key]) + "</td></tr>"
		except:
			continue
		f.write(line)

	f.write("</table>")
	openInBrowser(f)
