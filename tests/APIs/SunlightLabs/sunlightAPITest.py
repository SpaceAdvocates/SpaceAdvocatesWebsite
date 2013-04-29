########## Sunlight Labs API Test - sunlightAPITest.py ##########

## Original Author: John Zeller

## Description: This API test script simply demonstrates the access of information
##		from this particular API. The required format to run this program
##		is 'python sunlightAPITest.py 97333', where 97333 is some zip
##		code in the United States. The output is a simple HTML file called
##		'test.html'.
## Note: In terms of a finished product, this particular API feature to search
##	 by zip code should be used sparingly or not at all. Instead the use
##	 of the search feature which allows queries with latitude and longitude
##	 are preferred to ensure accurate Congressional information. This is due
##	 to the fact that some districts fall between multiple zip codes.

import sys
import urllib2
import simplejson
import webbrowser


def getZip():
    args = sys.argv
    if len(args) != 2:
        print "Needs format: python sunlightAPITest.py 97333 -- Where 97333 is some zip code"
    try:
        zipcode = str(args[1])
    except:
        print "Needs format: python sunlightAPITest.py 97333 -- Where 97333 is some zip code"
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
	keyDic =   {'last_name': 'Last Name',
				'state_name': 'State Name',
				'office': 'Office',
				'fax': 'Fax Number',
				'thomas_id': 'Thomas ID',
				'first_name': 'First Name',
				'middle_name': 'Middle Name',
				'district': 'District',
				'senate_class': 'Senate Class',
				'in_office': 'In Office',
				'state': 'Name',
				'crp_id': 'CRP ID',
				'facebook_id': 'Facebook',
				'party': 'Party',
				'fec_ids': 'FEC IDs',
				'votesmart_id': 'Votesmart ID',
				'website': 'Website',
				'lis_id': 'LIS ID',
				'govtrack_id': 'GovTrack ID',
				'phone': 'Phone Number',
				'birthday': 'Birthday',
				'nickname': 'Nickname',
				'contact_form': 'Contact Form',
				'bioguide_id': 'Bioguide ID',
				'gender': 'Gender',
				'title': 'Title',
				'name_suffix': 'Name Suffix',
				'twitter_id': 'Twitter',
				'chamber': 'Chamber',
				'state_rank': 'State Rank',
				'youtube_id': 'YouTube'}
	return keyDic[key]


if __name__ == '__main__':
	keyPreferredOrder = [# Name and Title
				'first_name', 
				'middle_name', 
				'last_name', 
				'name_suffix', 
				'title', 
				# Personal Info
				'gender', 
				'birthday', 
				'nickname', 
				# Congressional Info
				'party', 
				'chamber', 
				'senate_class', 
				'in_office', 
				'state', 
				'state_name',
				'state_rank', 
				'district', 
				# Contact Info
				'office', 
				'phone', 
				'fax', 
				'website', 
				'contact_form', 
				'twitter_id', 
				'facebook_id', 
				'youtube_id',
				# IDs
				'crp_id', 
				'fec_ids', 
				'votesmart_id', 
				'lis_id', 
				'govtrack_id', 
				'bioguide_id', 
				'thomas_id', ]
	apiKey = "apikey=578f15b9d3a44ebb8c829860d609bba8"
	urlAddr = "http://congress.api.sunlightfoundation.com/"
	lookup = "legislators/locate"
	zipcode = getZip()

	request = urlAddr + lookup + "?" + apiKey + "&zip=" + zipcode

	req = urllib2.urlopen(request)
	result = simplejson.load(req)
	f = createHTMLFile()
	f.write("<html><head><title>Congressional Results</title></head><body><table>")

	print result['count'], " Members of Congress found!\n\n"

	results = result['results']
	for moc in results:
		for key in keyPreferredOrder:
			try:
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td>" + str(moc[key]) + "</td></tr>"
			except:
				continue
			if moc[key] == None:
				continue
			if str(moc[key])[0:4] == 'http':
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td><a href='" + str(moc[key]) + "' target='_blank'>Click Here</a></td></tr>"
			if keyLookup(key)[0:4] == 'Twit':
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td><a href='http://www.twitter.com/" + str(moc[key]) + "' target='_blank'>Click Here</a></td></tr>"
			if keyLookup(key)[0:4] == 'Face':
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td><a href='http://www.facebook.com/" + str(moc[key]) + "' target='_blank'>Click Here</a></td></tr>"
			if keyLookup(key)[0:4] == 'YouT':
				line = "<tr><td style='padding-right:30px'>" + keyLookup(key) + "</td><td><a href='http://www.youtube.com/" + str(moc[key]) + "' target='_blank'>Click Here</a></td></tr>"
			f.write(line)
		f.write("<tr><td><br></td></tr>")

	f.write("</table>")
	openInBrowser(f)
