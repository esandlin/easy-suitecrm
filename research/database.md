Question: What database does suite crm require and can we facilitate that on
Heroku

Links:
- https://docs.suitecrm.com/admin/compatibility-matrix/
- https://elements.heroku.com/addons/jawsdb

Answer: According to the compatibility matrix suite crm supports MariaDB or
MySql. Heroku has addons that will facilitate this, we are going to use jawsdb
which has a free tier as well as many steps up for more space and features.

--

Update: jawsdb imposes a "max_questions" limit unless you pay 40$/month. This
essentially limits you to 3600 queries / hour. Unfortunately suite crm's
internal setup blows through that limit. Upon further research a different
heroku mysql addon, clear db, also has this same limit, but you can get out from
under it by paying only 10$/month. Probably switch to clear db.
