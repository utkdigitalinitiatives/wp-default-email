# wp-default-email
Change sender name and address in WordPress email notifications to University Libraries Webmaster libwebmaster@utk.edu.

Code adapted from http://www.wpbeginner.com/plugins/how-to-change-sender-name-in-outgoing-wordpress-email

Option 1 of the email from Bob Hillhouse

The default WordPress sender name is ‘WordPress’ which sends emails from a non-existent email address (wordpress@yourdomain.com) as the sender email. This default behavior will cause this email to potentially discarded.

Email to LANMAN Thursday September 14, 2017 8:27 AM (EDT)

If you have configured your servers to send email when specific events happen on those servers, you may be impacted by a change that Microsoft made on Sunday, September 10, which set a limit for emails from any unregistered domains (unknown by O365) that are sending email through our secured connectors.  Limits are set for our Office 365 tenant, not for a specific domain.
 
For example, when we hit the limit, emails from a host using a From address of the form, LDAP_REPL@themis.utk.tennessee.edu, were dropped by Microsoft. We opened a ticket with Microsoft, and we were given a two-week reprieve to change our process to comply.
 
The two-week window will end September 24, 2017. At that time, email from any unknown domain will be dropped for 24 hours when we hit the limit. 
 
Options for admins of servers sending emails using the host name as the sending email domain. 
1.  Change the From address on the sending host to a domain already in O365 (see below).
If this is an option for you, the issue would be permanently resolved for your server.
2.  Add the domain (host IP name) to O365.
Contact the HelpDesk online or at 865-974-9900 and request the host name be added to Office 365.
New servers brought online that send email will need to be added by the same process or use an existing domain.
 
Registered generic domains in O365:
·        Live.utk.edu
·        Mail.tennessee.edu
·        Tennessee.edu
·        Tmail.utk.edu
·        Utk.edu
·        Tennessee.edu
·        Utk.tennessee.edu
 
If you have any questions, please contact the OIT HelpDesk.
 
Sincerely,
 
Bob
 
 
-- 
Bob Hillhouse, CISSP
Associate CIO & CISO
bob@utk.edu
