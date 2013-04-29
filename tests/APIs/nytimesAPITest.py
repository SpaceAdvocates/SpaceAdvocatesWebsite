########## NYTimes API Test - nytimesAPITest.py ##########

## Original Author: John Zeller

## Description: This API test script simply demonstrates the access of information
##              from this particular API. The required format to run this program
##              is 'python sunlightAPITest.py 97333', where 97333 is some zip
##              code in the United States. The output is a simple HTML file called
##              'test.html'.
## Note: In terms of a finished product, this particular API feature to search
##       by zip code should be used sparingly or not at all. Instead the use
##       of the search feature which allows queries with latitude and longitude
##       are preferred to ensure accurate Congressional information. This is due
##       to the fact that some districts fall between multiple zip codes.

import sys
import urllib2
import simplejson
import webbrowser


def getZip():
    args = sys.argv
    if len(args) != 2:
        print "Needs format: python testAPI.py 97333 -- Where 97333 is some zip code"
    try:
        zipcode = str(args[1])
    except:
        print "Needs format: python testAPI.py 97333 -- Where 97333 is some zip code"
    return zipcode


def cleanResult(result):
	return result


def createHTMLFile():
	file = open('test.html', 'w+')
	return file


def openInBrowser(f):
	new = 2 # Open in a new tab, if possible
	url = "./" + f.name
	webbrowser.open(url,new=new)


def keyLookup(key):
	keyDic =   {'first_name': 'First Name',
				'middle_name': 'Middle Name',
				'last_name': 'Last Name',
				'state': 'State',
				'party': 'Party',
				'seniority': 'Seniority',
				'id': 'ID',
				'thomas_id': 'Thomas ID',
				'next_election': 'Next Election',
				'votes_with_party_pct': 'Votes w/ Party',
				'missed_votes_pct': 'Missed Votes',
				'twitter_account': 'Twitter',
				'api_uri': 'API URI'}
	return keyDic[key]


if __name__ == '__main__':
	keyPreferredOrder = ['first_name',
						 'middle_name',
						 'last_name',
						 'state',
						 'party',
						 'seniority',
						 'id',
						 'thomas_id',
						 'next_election',
						 'votes_with_party_pct',
						 'missed_votes_pct',
						 'twitter_account',
						 'api_uri']
	apiKey = "api-key=b18a8ce875e253845eeaa54ce5ff0209:8:67492169"
	version = "v3"
	congressNum = "112-113"
	chamber = "senate"
	xmlORjson = ".json"
	
	urlAddr = "http://api.nytimes.com/svc/politics/" + version + "/us/legislative/congress/"

	request = urlAddr  + congressNum + "/" + chamber + "/members" + xmlORjson + "?" + apiKey

	req = urllib2.urlopen(request)
	#opener = urllib2.build_opener()
	#f = opener.open(req)
	result = simplejson.load(req)
	f = createHTMLFile()
	f.write("<html><head><title>NYTimes Results</title></head><body><table>")

	#print result.keys() 				# ['status', 'results', 'copyright']
	#print result['results'][0].keys() 	# ['chamber', 'num_results', 'members', 'congress', 'offset']
	
	members = result['results'][0]['members']
	print members[0].keys()

	for moc in members:
		for key in keyPreferredOrder:
			try:
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td>" + str(moc[key]) + "</td></tr>"
			except:
				continue
			if moc[key] == None:
				continue
			f.write(line)
		f.write("<tr><td><br></td></tr>")

	f.write("</table></body></html>")
	openInBrowser(f)
