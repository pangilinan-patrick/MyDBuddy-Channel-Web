/**
   * Saves or Retrieves data from Oracle DB
   * @title User DB Utility
   * @category Utility
   * @author Abhishek Raj Simon
   * @param {string} name - Only supports get/set operations
   * @param {string} key - Can contain any key against which value needs to be pushed to DB
   * @param {string} value - Can contain a any value that needs to be pushed to DB   
   */
const userDBUtility = async (name, value) => {
	var table = "*";
	const l = '"Link/Response"';
	const id = '"ID"';
	
	if (name === 'myd_issues') {
		table = "public.mydcampus_issues_faq";
	} else if (name === 'myd_info') {
		table = "public.mydcampus_info_faq";
	} else if (name === 'dlsl_info') {
		table = "public.dlsl_info_faq";
	} else {
		console.log("No table selected");
	}
	
	const knex = require('knex')({
    client: 'pg',
    connection: {
      host: 'localhost',
	  port: 5432,
      user: 'postgres',
      password: 'Activepostgresqlnow23',
      database: 'mydbuddydb'
    },
    useNullAsDefault: false,
    log: {
      warn(message) {
        console.log(message);
      },
      error(message) {
        console.error(message);
      },
      deprecate(message) {
        console.log(message);
      },
      debug(message) {
        console.log(message);
      },
    }
  });
  
  if(knex) {
	user.param = value
	let query = "", response = false;
	query = "SELECT "+ l +" FROM " + table + " WHERE "+ id +"='" + value + "'";
	var s = undefined;
	await knex.raw(query).on('query', function (data) {
      //A query event is fired just before a query takes place. Useful for logging all queries throughout your application.
      console.log("Executing: " + data.sql)
	  
    }).then(function (data) {
		try {
			s = JSON.stringify(Object.values(data['rows'][0])[0]);
		} catch(error) {
			console.log("1st error" + error);
			s = undefined;
			user.data = "Cannot find solution";
			user.userDbStatus = false;
			throw error;
		}
		if (s !== undefined) {
        console.log(s)
        user.param = value
        user.data = s;
        user.userDbStatus = true;
      } else {
		  
		console.log("HERE: " + s)
        //user.data = undefined;
		user.data = "Cannot find solution";
        user.userDbStatus = false;
      }
    }).catch(function(err) {
		console.log("2nd error" + err)
		user.data = "Cannot find solution";
		user.userDbStatus = false;
	});
	} else {
		console.log("knex is not initialized");
	}
  }

return userDBUtility(args.name, args.value)