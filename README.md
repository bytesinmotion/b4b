# b4b
Simple extbase extension to showcase translation handling problem


# workflow

Install extension

add 1-2 records of type sectors to your database and add a translation
create a record of type customer in the backend, set language to -1 and assign a sector


translate the frontend page and open the frontend editor in the secondary language
try to edit the record and you'll see the id of the sector in the dropdown with uid_uidtranslated
saving the record does not work

