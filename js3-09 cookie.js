function setCookie(cName,cValue,eDate,cPath,cDomain,cSecurity)
{
	var theCookie = cName + "=" + escape(cValue);
	if(eDate) theCookie += "; expires=" + eDate.toGMTString();
	if(cPath) theCookie += "; path=" + cPath;                               
	if(cDomain) theCookie += "; domain=" + cDomain;                           
	if(cSecurity) theCookie += "; secure";                                      
	document.cookie = theCookie;
}

function getCookie(cName)
{
	if(cName) 
	{
		var cookieString = document.cookie;
		var cookieArray = cookieString.split(";");
		for(i=0;i<cookieArray.length;i++)
		{
			thisCookie = cookieArray[i];
			if(thisCookie.indexOf(cName+"=") > -1) 
			{
				var valueLoc = thisCookie.indexOf("=")+1;
				cookieValue = thisCookie.substring(valueLoc,thisCookie.length);
				return unescape(cookieValue);
			}	
		}
	}	
	return false;
}

function killCookie(cookieName,cookiePath,cookieDomain) 
{
	var theCookie = cookieName + "=";
	if(cookiePath) theCookie += "; path=" + cookiePath;
	if(cookieDomain) theCookie += "; domain=" + cookieDomain;
	theCookie += "; expires=Thu, 01-Jan-70 00:00:01 GMT";
	document.cookie = theCookie;
}
