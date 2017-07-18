
		function findUniversity() {
		    var value = chartSelect.options[chartSelect.selectedIndex].value;



		    if (value == "300-310") {
		        var dataType1 = dataSelect.options[dataSelect.selectedIndex].value;
		        if (dataType1 == "90-100") {
		                var colg1 = ["USCA","UCLA","University of Colorado, Denver","Texas A&M University"];
		      
				        var colgDesc1= ["The University of Southern California (USC[a] or SC) is a private, not-for-profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California. As California's oldest private research university.View more info here: <a href='http://www.usc.edu'> (www.usc.edu) </a> ","The University of California, Los Angeles (UCLA) is a public research university located in the Westwood -profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California.View more info here: <a href='http://www.ucla.edu'> (www.usc.edu) </a>","The University of Colorado Denver | Anschutz Medical Campus (sic) is a public research university in the U.S. state of Colorado. It is part of the University of Colorado system.Visit :<a href=http://www.ucdenver.edu'> (www.ucdenver.edu) </a> ","Texas A&M University (Texas A&M, TAMU or A&M) is a coeducational public research university located in College Station, Texas, United States. It is the flagship institution of the Texas A&M University System, the fourth-largest university in the United States and the largest university in Texas. Texas A&M's designation.Visit :<a href='http://www.tamu.edu'>(www.tamu.edu) </a>"];
                cLen1 = colg1.length;

  var myTable1= "<table class='table table-bordered table-responsive table-hover univTable' style='border:3px;'><tr style='background-color: black'><th  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></th>";
  
    myTable1+="<th class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></th></tr>";

  for (var i=0; i< cLen1; i++) {
  	 myTable1+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg1[i] + "</td>";
    myTable1+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc1[i] + "</td></tr>";
 
  }  
   myTable1+="</table>";



                document.getElementById("university").innerHTML = myTable1;
		        }

		          if (dataType1 == "100-110") {
		          var colg = ["UMass","UTD","University of Virginia","Rice University"];
		      
				        var colgDesc= ["The University of Southern California (USC[a] or SC) is a private, not-for-profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California. As California's oldest private research university.View more info here: <a href='http://www.usc.edu'> (www.usc.edu) </a> ","The University of Southern California (USC[a] or SC) is a private, not-for-profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California.View more info here: <a href='http://www.ucla.edu'> (www.usc.edu) </a>","The University of Virginia (U.Va. or UVA), frequently referred to simply as Virginia, is a public-private research university founded by Declaration of Independence author Thomas Jefferson and located in Charlottesville, Virginia. It is known for its historic foundations, student-run honor code, and secret societies.","William Marsh Rice University, commonly referred to as Rice University or Rice, is a private research university located on a 295-acre (1.19 km2) campus in Houston, Texas, United States. The university is situated near the Houston Museum District and is adjacent to the Texas Medical Center. Opened in 1912 afterthe murder of its namesake William Marsh Rice" ];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }
              if (dataType1 == "110-120") {
		               var colg = ["Boston University","University of Maryland, College Park ","University of Washington","Seattle University"];
		      
				        var colgDesc= ["Boston University (most commonly referred to as BU or otherwise known as Boston U.) is a private research university located in Boston, Massachusetts. The university is nonsectarian,but is historically affiliated with the United Methodist Church. The university has more than 3,800 faculty members and 33,000 students, and is one of Boston's largest employers. It offers bachelor's degrees, master's degrees, and doctorates, and medical, dental, business, and law degrees through eighteen schools and colleges on two urban campuses.  ","Maryland Listeni/ˈmɛrᵻlənd/[8] is a state located in the Mid-Atlantic region of the United States, bordering Virginia, West Virginia, and Washington, D.C. to its south and west; Pennsylvania to its north; and Delaware to its east. The state's largest city is Baltimore, and its capital is Annapolis. It has three occasionally used nicknames: the Old Line State, the Free State, and the Chesapeake Bay State.One of the original Thirteen Colonies, Maryland is considered to be the birthplace of religious freedom in America, when it was formed in the early 17th century as an intended refuge for persecuted Catholics from England by George Calvert. George Calvert was the first Lord Baltimore and the first English proprietor of the then-Maryland colonial grant.","The University of Washington, commonly referred to as Washington or informally U-Dub, or locally as UW is a public flagship research university based in Seattle, Washington, United States.Founded in 1861, UW is one of the oldest universities on the West Coast and features one of the most highly regarded medical schools in the world. The university has three campuses: the primary and largest in the University District of Seattle and two others in Tacoma and Bothell. Its operating expenses and research budget for fiscal year 2014–15 is expected to be $6.4 billion. "," Seattle (Listeni/siˈætəl/) is a West Coast inlet seaport city and the seat of King County. With an estimated 662,400 residents as of 2015, Seattle is the largest city in both the state of Washington and the Pacific Northwest region of North America. In July 2013 it was the fastest-growing major city in the United States, and remained in the top five in May 2015 with an annual growth rate of 2.1%. The Seattle metropolitan area of around 3.6 million inhabitants is the 15th largest metropolitan area in the United States. The city is situated on an isthmus between Puget Sound (an inlet of the Pacific Ocean) and Lake Washington, about 100 miles (160 km) south of the Canada–United States border. A major gateway for trade with Asia, Seattle is the third largest port in North America in terms of container handling as of 2015. "];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }

		    }
        

		    if (value == "310-320") {
		        var dataType = dataSelect.options[dataSelect.selectedIndex].value;
		        if (dataType == "90-100") {
		            var colg = ["George Mason University","University of Texas, Austin","George Washington University","University of Rhode Island"];
		      
				        var colgDesc= [" George Mason University (also Mason), located in Fairfax, Virginia, United States, is the largest public  research university in the Commonwealth of Virginia. The university was founded as a branch of the University  of Virginia in 1957 and became an independent institution in 1972. Today, Mason is recognized for its programs in  economics, law, creative writing, computer science, and business. In recent years, George Mason faculty have twice won the Nobel Prize in Economics. The university enrolls 33,917 students, making it the largest university by head count in the Commonwealth of Virginia. ","University of Texas at Austin, informally UT Austin, UT, University of Texas, or Texas in sports contexts, is a public research university and the flagship institution of The University of Texas System. Founded in 1883 as 'The University of Texas,' its campus is located in Austin—approximately 1 mile (1,600 m) from the Texas State Capitol. The institution has the fifth-largest single-campus enrollment in the nation, with over 50,000 undergraduate and graduate students and over 24,000 faculty and staff. The university has been labeled one of the 'Public Ivies,' a publicly funded university considered to provide a quality of education comparable to those of the Ivy League. ","  The George Washington University (GW, GWU, or George Washington) is a private, coeducational research university located in the Foggy Bottom neighborhood of Washington,  D.C. with two other campuses including the Mount Vernon campus in the Foxhall neighborhood, as well as the Virginia Science & Technology campus in Loudoun County, Virginia.GW is the largest institution of higher education in the District of Columbia. The university has ten colleges and schools: the Columbian College of Arts and Sciences (which includes the Corcoran School of the Arts and Design, the School of Media and Public Affairs, and the Trachtenberg School of Public Policy and Public Administration)","University of Rhode Island, commonly referred to as URI, is the principal public research as well as the land grant and sea grant university for the state of Rhode Island. Its main campus is located in the village of Kingston in southern Rhode Island. Additionally, smaller campuses include the Feinstein Campus in Providence, the Narragansett Bay Campus in Narragansett, and the W. Alton Jones Campus in West Greenwich. The university offers bachelor's degrees, master's degrees, and doctoral degrees in 80 undergraduate and 49 graduate areas of study through seven academic colleges. "];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";

    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }
		        if (dataType == "100-110") {
		                var colg = ["USC","NEU","Brown University","Carnegie Mellon University"];
		      
				        var colgDesc= ["The University of Southern California (USC[a] or SC) is a private, not-for-profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California. As California's oldest private research university.View more info here: <a href='http://www.usc.edu'> (www.usc.edu) </a> ","The University of Southern California (USC[a] or SC) is a private, not-for-profit, and nonsectarian research university founded in 1880 with its main campus in the city area of Los Angeles, California.View more info here: <a href='http://www.ucla.edu'> (www.usc.edu) </a>","Northeastern University (NU formerly NEU) is a private research university in Boston, Massachusetts, established in 1898. It is categorized as R1 (Doctoral Universities: Highest Research Activity) by the Carnegie Classification of  Institutions of Higher Education. The university offers undergraduate and graduate programs leading to doctoral degrees on its main campus in the Fenway-Kenmore, Roxbury, South End, and Back Bay neighborhoods, as well as advanced degrees at graduate campuses in Charlotte, North Carolina and Seattle, Washington. It has roughly 16,000 undergraduates and nearly 8,000 graduate students. Northeastern features a cooperative education program that integrates classroom study with professional experience on seven continents.","Brown University is a private, Ivy League research university in Providence, Rhode Island. Founded in 1764,Brown is the seventh-oldest institution of higher education in the United States and one of the nine Colonial Colleges established    before the American Revolution. At its foundation, Brown was the first college in the United States to accept students regardless of their religious affiliation.Its engineering program, established in 1847, was the first in what is now known as the Ivy League. Brown's New Curriculum—sometimes referred to in education  theory as the Brown Curriculum—was adopted by faculty vote in 1969 after a period of student lobbying; the New Curriculum eliminated mandatory distribution requirements, and allowed them to take any course for a grade of satisfactory or In 1971, Brown's coordinate women's institution, Pembroke College, was fully merged into the university"," Carnegie Mellon University (Carnegie Mellon or CMU) is a private research university in Pittsburgh, Pennsylvania. The university began as the Carnegie Technical Schools, founded  by Andrew Carnegie in 1900. In 1912, the school became the Carnegie Institute of Technology and began granting four-year degrees. In 1967, the Carnegie Institute of Technology  merged with the Mellon Institute of Industrial Research to form Carnegie Mellon University. The university's 140-acre (57 ha) main campus is 3 miles (4.8 km) from Downtown Pittsburgh and abuts the Carnegie Museums of Pittsburgh, the main branch of the Carnegie Library of Pittsburgh, the Carnegie Music Hall, Schenley Park, and the Phipps Conservatory and Botanical Gardens. "];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }

		        if (dataType == "110-120") {
		                var colg = [" University of Massachusetts","Harvard University","University of Pennsylvania","University of Pittsburg"];
		      
				        var colgDesc= ["The University of Massachusetts Amherst (otherwise known as UMass Amherst or simply UMass) is a public research and land-grant university in Amherst, Massachusetts, United States, and the flagship of the University of Massachusetts system. With approximately 1,300 faculty members and more than 29,000 students, UMass Amherst is the largest public university in New England[9] and is ranked the 29th best public university in the nation. The university offers bachelor's degrees, master's degrees, and doctoral degrees in 111 undergraduate,75 master's and 47 doctoral programs in nine schools and colleges."," Harvard University is a private Ivy League research university in Cambridge, Massachusetts, established 1636, whose history, influence and wealth have made it one of the most prestigious universities in the world. Established originally by the Massachusetts legislature and soon thereafter named for John Harvard (its first benefactor), Harvard is the United States' oldest institution of higher learning, and the Harvard Corporation (formally, the President and Fellows of Harvard College) is its first chartered corporation. Although never formally affiliated with any denomination, the early College primarily trained Congregationalist and Unitarian clergy. Its curriculum and student body were gradually secularized during the 18th century, and by the 19th century Harvard had emerged as the central cultural establishment among Boston elites.","University of Pennsylvania (commonly referred to as Penn or UPenn) is a private, Ivy League, research university located in Philadelphia. Incorporated as The Trustees of the University of Pennsylvania, Penn is one of 14 founding members of the Association of American Universities and one of the nine original Colonial Colleges. Penn is one of several universities that claims to be the first university in the United States of America.Benjamin Franklin, Penn's founder, advocated an educational program that focused as much on practical education for commerce and public service as on the classics and theology although Franklin's curriculum was never adopted. The university coat of arms features a dolphin on the red chief, adopted directly from the Franklin family's own coat of arms.","University of Pittsburgh at Johnstown, also known as UPJ or Pitt-Johnstown, is a four-year, degree-granting state-related university institution that is a residential, regional campus of the University of Pittsburgh. The university is located in Richland Township, a suburban area of Johnstown, Pennsylvania, and was founded in 1927 as one of the first regional campuses of a major university in the United States. UPJ is ranked as the 28th best baccalaureate college in the North and the eighth best public baccalaureate college in the North by U.S. News & World Report in its 'America's Best Colleges 2010' annual college guide. UPJ is also listed among the 'Best Colleges in the Northeastern Region' by The Princeton Review."];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }

		    }
       

        
		    if (value == "320-330") {
		        var dataType = dataSelect.options[dataSelect.selectedIndex].value;
		        if (dataType == "90-100") {
		                var colg = ["Stanford","University of California, Berkeley","University of Cincinnati","Ohio State University"];
		      
				        var colgDesc= ["Stanford University, officially Leland Stanford Junior University, is a private research university in Stanford, California, and one of the world's most prestigious institutions. Stanford was founded in 1885 by Leland Stanford,former Governor of and U.S. Senator from California and leading railroad tycoon, and his wife, Jane Lathrop Stanford, in memory of their only child, Leland Stanford, Jr., who had died of typhoid fever at age 15 the previous year. Stanford admitted its first students on October 1, 1891[2][3] as a coeducational and non-denominational institution. Tuition was free until 1920. The university struggled financially after Leland Stanford's 1893 death and again after much of the campus was damaged by the 1906 San Francisco earthquake.[24] Following World War II, Provost Frederick Terman supported faculty and graduates' entrepreneurialism to build self-sufficient local industry in what would later be known as Silicon Valley."," The University of California, Berkeley (also referred to as Berkeley, UC Berkeley, California or simply Cal) is a public research university located in Berkeley, California. It is the flagship campus of the University of California system, one of three parts in the state's public higher education plan, which also includes the California State University system and the California Community Colleges System. It is considered by the Times Higher Education World University Rankings as one of six university brands that lead in world reputation rankings in 2015 and is ranked third on the U.S. News' 2015 Best Global Universities rankings conducted in the U.S. and nearly 50 other countries.","The University of Cincinnati (commonly referred to as Cincinnati or UC) is a comprehensive public research university in Cincinnati, in the U.S. state of Ohio, and a part of the University System of Ohio. Founded in 1819 as Cincinnati College, it is the oldest institution of higher education in Cincinnati and has an annual enrollment of over 40,000 students, making it the second largest university in Ohio and one of the 50 largest universities in the United States. In the 2010 survey by Times Higher Education (UK), the university was ranked in the top 100 universities in North America and as one of the top 200 in the world.","The Ohio State University, commonly referred to as Ohio State or OSU, is a public research university in Columbus, Ohio.Founded in 1870, as a land-grant university and ninth university in Ohio with the Morrill Act of 1862,[4] the university was originally known as the Ohio Agricultural and Mechanical College. The college began with a focus on training students in various agricultural and mechanical disciplines but was developed into a comprehensive university.It has since grown into the third largest university campus in the United States."];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }
		        if (dataType == "100-110") {
		          var colg = ["Cornell","NCSU","Columbia University","Princeton University"];
		      
				        var colgDesc= ["Cornell University is an American private Ivy League and federal land-grant research university located in Ithaca, New York.Founded in 1865 by Ezra Cornell and Andrew Dickson White, the university was intended to teach and make contributions in all   fields of knowledge — from the classics to the sciences, and from the theoretical to the applied. These ideals, unconventional for the time, are captured in Cornell's motto, a popular 1865 Ezra Cornell quotation: 'I would found an institution where any person can find instruction in any study'.","North Carolina State University, officially North Carolina State University at Raleigh, is a public, coeducational, research university located in Raleigh, North Carolina, United States. Commonly known as NC State or simply State, the university is part of the University of North Carolina system and is a land, sea,  and space grant institution. The university forms one of the corners of the Research Triangle together with Duke University in Durham and The University of North Carolina at Chapel Hill. The North Carolina General Assembly founded the North Carolina College of Agriculture and Mechanic Arts, now NC State, on March 7, 1887, as a land-grant college. Today, NC State has an enrollment of more than 34,000 students, making it the largest university in the Carolinas. NC State has historical strengths in engineering, agriculture, life sciences, textiles and design and now offers 106 bachelor's degrees. The graduate school offers 104 master's degrees, 61 doctoral degrees, and a Doctor of Veterinary Medicine."," Columbia University (officially Columbia University in the City of New York) is a private, Ivy League, research university in Upper Manhattan, New York City.It was established in 1754 as King's College by royal charter of George II of Great Britain and is the oldest college in New York State as well as the fifth chartered institution of higher learning in the country, making Columbia one of nine colonial colleges founded before the Declaration of Independence. After the revolutionary war, King's College briefly became a state entity, and was renamed Columbia College in 1784. A 1787 charter placed the institution under a private board of trustees before it was renamed Columbia University in 1896 when the campus was moved from Madison Avenue to its current location in Morningside Heights occupying land of 32 acres (13 ha). Columbia is one of the fourteen founding members of the Association of American Universities, and was the first school in the United States to grant the M.D. degree.","Princeton University is a private Ivy League research university in Princeton, New Jersey, United States. Founded in 1746 in Elizabeth as the College of New Jersey, Princeton was the fourth chartered institution of higher education in the Thirteen Colonies and thus one of the nine Colonial Colleges established before the American Revolution. The institution moved to Newark in 1747, then to the current site nine years later, where it was renamed Princeton University in 1896. Princeton provides undergraduate and graduate instruction in the humanities, social sciences, natural sciences, and engineering"];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }
		         if (dataType == "110-120") {
		          var colg = ["Kent State","NYU","University of North Carolina","Duke University"];
		      
				        var colgDesc= ["Kent State University (also known as Kent, Kent State, and KSU) is a public research university in Kent, Ohio, United States. In addition to the main campus in Kent, which is the largest and oldest campus and serves as the administrative center, Kent State operates seven regional campuses in Northeast Ohio and additional facilities in the region and internationally. Regional campuses are located in Ashtabula, Burton, East Liverpool, Jackson Township, New Philadelphia, Salem, and Warren, Ohio, with additional facilities in Cleveland, Independence, and Twinsburg, Ohio, New York City, and Florence, Italy.","New York is a state in the Northeastern United States and is the United States' 27th-most extensive, fourth-most populous, and seventh-most densely populated state. New York is bordered by New Jersey and Pennsylvania to the south and Connecticut, Massachusetts, and Vermont to the east. The state has a maritime border in the Atlantic Ocean with Rhode Island, east of Long Island, as well as an international border with the Canadian provinces of Quebec to the north and Ontario to the west and north. The state of New York,from New York City, the state's most populous city and its economic hub.","The University of California (UC) is a public university system in the U.S. state of California. Under the California Master Plan for Higher Education, the University of California is a part of the state's three-system public higher education plan, which also includes the California State University system and the California Community Colleges System. Governed by a semi-autonomous Board of Regents, the University of California has 10 campuses, a combined student body of 238,700 students, 19,700 faculty members, 135,900 staff members and over 1.6 million living alumni as of spring 2015. The University of California was founded in 1868 in Berkeley, California. Its tenth and newest campus, UC Merced, opened for classes in fall 2005.","Duke University is a private research university located in Durham, North Carolina, United States. Founded by Methodists and Quakers in the present-day town of Trinity in 1838, the school moved to Durham in 1892. In 1924, tobacco and electric power industrialist James Buchanan Duke established the Duke Endowment, at which time the institution changed its name to honor his deceased father, Washington Duke. Duke's research expenditures in the 2014 fiscal year were $1.037 billion, the seventh largest in the nation. In 2014, Thomson Reuters named 32 Duke professors to its list of Highly Cited Researchers, making it fourth globally in terms of primary affiliations. Duke also ranks 5th among national universities to have produced Rhodes, Marshall, Truman, Goldwater, and Udall Scholars.[12] Ten Nobel laureates and three Turing Award winners are affiliated with the university."];
                cLen = colg.length;

  var myTable= "<table class='table table-bordered table-responsive table-hover univTable' ><tr style='background-color: black'><td  class='col-md-6' style='color: red;table-layout: fixed;'><center><h4>University Name</h4></td>";
  
    myTable+="<td class='col-md-6' style='color: red; text-align: center;'><h4>Description</h4></td></tr>";

  for (var i=0; i< cLen; i++) {
  	 myTable+="<tr><td  class='col-md-6' style='width: 100px; text-align: left;color: white;'>" + colg[i] + "</td>";
    myTable+="<td  class='col-md-6' style='width: 100px;color: white;''>" + colgDesc[i] + "</td></tr>";
 
  }  
   myTable+="</table>";



                document.getElementById("university").innerHTML = myTable;
		        }

		    }

		}
