# b4b
Simple extbase extension to showcase translation handling problem


# workflow

Install extension
add demo.sql to your database

add plugin to your demo-page and translate the page.

Open the frontend in the secondary language secondary language
try to edit a record and you'll see the id of the sector in the dropdown with uid_uidtranslated
saving the record does not work

Does not work with records of sys_language_uid -1
or sys_language_uid 1
or translations of a sys_language_uid=0 record

