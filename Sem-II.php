<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
  <title>Study Sphere</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
  <!-- Navbar Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <title>Syllabus</title>
  <style>
    body {
      position: relative;
    }

    .list-group {
      position: sticky;
      top: 102px;
    }
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <!--================= Header Part Start ===============-->
  <header style="overflow: hidden;">
    <nav>
      <a href="#home"><img src="assest/images/clg_logo.jpg" class="clg_logo" style="mix-blend-mode:light;"></a>
      <i class="fas fa-bars" id="ham-menu" class="abc"></i>
      <ul id="nav-bar">
        <li>
          <a href="home.php">Home<span></span><span></span><span></span><span></span></a>
          </div>
        </li>
        <li>
          <a href="home.php#service">Service<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="aboutus.php">About us<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="feedback.php">Feedback<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="#contact">Contact<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">
            <a href="#">Login<span></span><span></span><span></span><span></span></a>
            </button>
            <div class="dropdown-content">
              <a href="Signin.php">Student</a>
              <a href="facultysignin.php">Faculty</a>
            </div>
          </div> 
        </li>
      </ul>
    </nav>
    <div class="mb-0">
      <div class="row" style="overflow: hidden;">
        <div class="col-sm-3">
          <div class="list-group">
            <a class="list-group-item list-group-item-action " href="Syllabus.php">MCA Sem I</a>
            <a class="list-group-item list-group-item-action" href="Sem-II.php">MCA Sem II</a>
            <a class="list-group-item list-group-item-action" href="Sem-III.php">MCA Sem III</a>
            <a class="list-group-item list-group-item-action" href="Sem-IV.php">MCA Sem IV</a>
          </div>
        </div>
        <div class="col-sm-9">
          <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="50" tabindex="0">
            <div class="accordion" id="accordionExample" style="display:block;">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    MCA 201 : Data Base Management System
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>Introduction: Advantage of DBMS approach, various view of data, data independence, schema
                      and subschema, primary concepts of data models, Database languages, transaction
                      management, Database administrator and users, data dictionary, overall system architecture.
                      ER model: basic concepts, design issues, mapping constraint, keys, ER diagram, weak and
                      strong entity sets, specialization and generalization, aggregation, inheritance, design of ER
                      schema, reduction of ER schema to tables</p>
                    <strong>UNIT II</strong>
                    <p>
                      Domains, Relations and Keys: domains, relations, kind of relations, relational database, various
                      types of keys, candidate, primary, alternate and foreign keys.
                      Relational Algebra & SQL: Features of good relational database design,Codd’s rule, The
                      structure, relational algebra with extended operations, modifications of Database, idea of
                      relational calculus, basic structure of SQL, set operations, aggregate functions, null values,
                      nested sub queries, derived relations, views, modification of Database, join relations, DDL in
                      SQL.
                      PL/SQL programming:working with stored procedures,triggers,cursor
                      Database Integrity: general idea. Integrity rules, domain rules, attribute rules, relation rules,
                      Database rules, assertions, triggers, integrity and SQL.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Functional Dependencies and Normalization: basic definitions, trivial and non trivial
                      dependencies, closure set of dependencies and of attributes, irreducible set of dependencies,
                      introduction to normalization, non loss decomposition, FD diagram, first, second, third Normal
                      forms, dependency preservation, BCNF, multivalued dependencies and fourth normal form,
                      Join dependency and fifth normal form.
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Transaction, concurrency and Recovery: basic concepts, ACID properties, Transaction states,
                      implementation of atomicity and durability, concurrent executions, basic idea of serializability,
                      basic idea of concurrency control, basic idea of deadlock, failure classification, storage
                      structure
                      types, stable storage implementation, data access, recovery and atomicity- log based recovery,
                      deferred Database modification, immediate Database modification, checkpoints. Distributed
                      Database: basic idea, distributed data storage, data replication, data fragmentation: horizontal,
                      vertical and mixed fragmentation.
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Emerging Fields in DBMS: object oriented Databases-basic idea and the model, object structure,
                      object class, inheritance, multiple inheritance, object identity, data warehousing- terminology,
                      definitions, characteristics, data mining and it’s overview, Database on www, multimedia
                      Databases-difference with conventional DBMS, issues, similarity based retrieval, continuous
                      media data, multimedia data formats, video servers.
                      Storage structure and file organizations: overview of physical storage media, magnetic disk
                      performance and optimization, basic idea of RAID, file organization, organization of records in
                      files, basic concepts of indexing, ordered indices, basic idea of B-tree and B+-tree organization
                      Network and hierarchical models: basic idea, data structure diagrams, DBTG model,
                      implementations, tree structure diagram, implementation techniques, comparison of the three
                      models.

                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. A Silberschatz, H.F Korth, Sudersan “Database System Concepts” –, MGH Publication.<br>
                      2. C.J Date “An introduction to Database Systems” –6th ed.<br>
                      3. Elmasri & Navathe “Fundamentals of Database systems” – III ed.<br>
                      4. B.C. Desai. “An introduction to Database systems” BPB<br>
                      5. Raghurama Krishnan “Database Systems” TMH
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    MCA 202 : Computer Network
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Introduction: Computer Network, Layered Network Architecture-Review of ISO-OSI Model.,
                      Transmission Fundamentals-, Communication Media-Conductive Metal (Wired Cable), Optical
                      Fiber links, Wireless Communication-Radio links, Setellite Links, Communication Services &
                      Devices, Telephone System., Integrated Service Digital Network (ISDN)., Cellular Phone., ATM.
                      Network Security, Virtual Terminal Protocol, Overview of DNS, SNMP, email, WWW,
                      Multimedia
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Data Security and Integrity: Parity Checking Code, Cyclic redundancy checks (CRC), Hemming
                      Code, Protocol Concepts –, Basic flow control, Sliding window protocal-Go-Back-N protocol
                      and selective repeat protocol, Protocol correctness- Finite state machine
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Local Area Network: Ethernet : 802.3 IEEE standard, Token Ring : 802.5 IEEE standard, Token
                      Bus : 802.4 IEEE standard, FDDI Protocol, DQDB Protocol, Inter Networking, Layer 1
                      connections- Repeater, Hubs, Layer 2 connections- Bridges, Switches, Layer 3 connectionsRouters,
                      Gateways.
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Wide Area Network: Introduction, Network routing, Routing Tables, Types of routing,
                      Dijkstra’s Algorithm, Bellman-Ford Algorithm, Link state routing, Open shortest path first,
                      Flooding, Broadcasting, Multicasting, Congestion & Dead Lock, Internet Protocols, Overview of
                      TCP/IP, Transport protocols, Elements of Transport Protocol, Transmission control protocol
                      (TCP), User data-gram protocol (UDP).
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Wireless Broadband Networks Technology Overview, Platforms and Standards:
                      Wireless broadband fundamentals and Fixed Wireless Broadband Systems, PlatformsEnhanced Copper,
                      Fibre Optic and HFC, 3G Cellular, Satellites, ATM and Relay Technologies,
                      HiperLAN2 Standard, Global 3G CDMA Standard, CDMA Harmonization G3G Proposal for
                      Protocol Layers
                    </p>
                    <strong>REFERENCE BOOK</strong>
                    <p>
                      1. A.S.Tanenbaum, “Computer Network”, 4th addition,PHI<br>
                      2. Forouzan “Data Communication and Networking 3ed”, TMH<br>
                      3. J.F.Hayes, “Moduling and Analysis of Computer Communication Networks”, Plenum Press<br>
                      4. D.E.Comer, “Internetworking with TCP/IP”, Volume Ist & IInd, PHI<br>
                      5. Willium Stalling, “Data & Computer communications”,Maxwell Macmillan International Ed.<br>
                      6. D.Bertsekas and R.Gallager,”Data Networks”, 2nd Ed. ,PHI.<br>
                      7. G.E. Keiser ,”Local Area Networks “, McGraw Hill, International Ed.<br>
                      8. Joh R. Vacca, “Wireless Broadband Networks Handbook 3G, LMDS and Wireless Internet”
                      Tata McGraw-Hill, 2001
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    MCA 203 : Software Engineering and UML
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Software Engineering paradigms – Waterfall Life cycle model – Spiral Model – Prototype
                      Model– Software Requirement - Requirements Elicitation Techniques – Initial Requirements
                      Document –– SRS Document – Requirements Change Management - Project Management
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Abstraction – Modularity – Software Architecture – Cohesion – Coupling – Various Design
                      Concepts and notations – Development of Detailed Design & Creation of Software Design
                      Document - Dataflow Oriented design – Designing for reuse – Programming standards.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Scope – Classification of metrics – Measuring Process and Product attributes – Direct and
                      Indirect measures – Reliability – Software Quality Assurance – Standards.
                      Need of Software Estimation – Function Point – Risk Management

                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Software Testing Fundamentals – Software testing strategies – Black Box Testing – White Box
                      Testing – System Testing – Functional Testing – Structural Testing – Regression Testing -
                      Testing Tools – Test Case Management –
                      Challenges of Software Maintenance – Types of Maintenance. Software Maintenance
                      Organization – Maintenance Report
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Introduction to UML : Use Case Approac,: Identification of Classes and Relationships,
                      Identifying State and Behavior, Use Case DiagramClass Diagram – State Diagram - Sequence ‘
                      Diagram – Activity Diagram – Deployment Diagrams Case Study - LMS
                    </p>
                    <strong>REFERENCE BOOK</strong>
                    <p>
                      1. Roger S. Pressman, “Software Engineering: A Practitioner’s Approach, Tata McGrawHill Education,
                      8th Edition, 2015.<br>
                      2. I. Sommerville, “Software Engineering”, Sixth Edition, Addison Wesley-Longman, 2004.<br>
                      3. Pankaj Jalote, “An Integrated approach to Software Engineering”, Second Edition,
                      Springer Verlag, 1997.<br>
                      4. Timothy C. Lethbridge and Robert Laganiere, “Object – Oriented Software Engineering,
                      Practical Software Development using UML and Java”, Tata McGraw Hill Publishing
                      Company Limited, Second Edition, 2004<br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    MCA 204 : Algorithm Design
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Introduction - Abstract Data Types (ADT) – Stack – Queue – Circular Queue - Double Ended
                      Queue - Applications of stack – Evaluating Arithmetic Expressions - Other Applications -
                      Applications of Queue - Linked Lists - Singly Linked List - Circularly Linked List - Doubly
                      Linked lists – Applications of linked list – Polynomial Manipulation.
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Binary Tree – expression trees – Binary tree traversals – applications of trees – Huffman
                      Algorithm - Binary search tree - Balanced Trees - AVL Tree - B-Tree - Splay Trees – Heap- Heap
                      operations- -Binomial Heaps - Fibonacci Heaps- Hash set.
                      Searching, Hashing and Sorting: requirements of a search algorithm; sequential search, binary
                      search, indexed sequential search, interpolation search,
                      Hashing-basics, methods, collision, resolution of collision, chaining; Internal sorting- Bubble
                      sort, selection sort, insertion sort, quick sort, merge sort on linked and contiguous list, shell
                      sort,
                      heap sort, tree sort.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Representation of graph - Graph Traversals - Depth-first and breadth-first traversal -
                      Applications of graphs - Topological sort – shortest-path algorithms - Dijkstra’s algorithm –
                      Bellman-Ford algorithm – Floyd's Algorithm - minimum spanning tree – Prim's and Kruskal's
                      algorithms. Basic idea of AVL tree- definition, insertion & deletion operations, basic idea of
                      Btree- definition, order, degree, insertion & deletion operations, B+-Tree- definitions,
                      comparison
                      with B-tree
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Algorithm Analysis – Asymptotic Notations - Divide and Conquer – Merge Sort – Quick Sort -
                      Binary Search - Greedy Algorithms – Knapsack Problem – Dynamic Programming – Optimal
                      Binary Search Tree - Warshall’s Algorithm for Finding Transitive Closure.

                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Backtracking – N-Queen's Problem - Branch and Bound – Assignment Problem - P & NP
                      problems – NP-complete problems – Approximation algorithms for NP-hard problems –
                      Traveling salesman problem-Amortized Analysis
                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. Ullman "Analysis and Design of Algorithm" TMH<br>
                      2. Goodman “Introduction to the Design & Analysis of Algorithms, TMH-2002.<br>
                      3. Aho, “Data Structure & Algorithms
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    MCA 205 : Object oriented Programming with JAVA
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      OOP concepts – Data abstraction, encapsulation, inheritance, benefits of
                      inheritance, polymorphism,
                      The Java Environment: Setting Class path; Data types; Operators - precedence and
                      associativity; Type conversion; Control and Iterative statements; Modular programming
                      methods;.
                      Object Oriented Programming in Java: Class; Objects; Packages; Scope and lifetime; Access
                      Modifiers; Constructors; Copy constructor; this pointer; finalize () method; Arrays; Memory
                      allocation and garbage collection
                      Inheritance : Inheritance basics, method overriding, dynamics method dispatch, abstract classes.
                      Interfaces : Defining an interface, implementing & applying interfaces, variables in interfaces,
                      extending interfaces
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Multithreading and Exception Handling: Basic idea of multithreaded programming; The
                      lifecycle of a thread; Creating thread with the thread class and runnable interface; Thread
                      synchronization; Thread scheduling; Producer-consumer relationship; Daemon thread, Selfish
                      threads; The try, catch and throw; throws Constructor and finalizers in exception handling;
                      Applets: Applet security restrictions; the class hierarchy for applets; Life cycle of applet; HTML
                      Tags for applet.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Input/Output : Exploring Java I/O, Directories, stream classes The Byte stream : Input stream,
                      output stream, file input stream, file output stream, print stream, Random access file, the
                      character streams, Buffered reader, buffered writer, print writer, serialization.
                      JDBC: JDBC-ODBC bridge; The connectivity model; The driver manager; Navigating the
                      resultset object contents; java.sql Package; The JDBC exception classes; Connecting to Remote
                      database.
                      Collections: The collections framework, collection interfaces, collection classes.

                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      AWT Fundamentals: The class hierarchy of window fundamentals; The basic user interface
                      components , Frame, Layout managers, flow layout etc.
                      The Java Event Handling Model: Java’s event delegation model , Event class hierarchy; Adapter
                      classes; Event classes action and different Events
                      SWINGS: Introduction, Hierarchy of swing components. Containers, Top level containers -
                      JFrame, JWindow, JDialog, JPanel, JButton, JToggleButton, JCheckBox, JRadioButton,
                      JLabel,JTextField, JTextArea, JList, JComboBox, JScrollPane.
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Introduction of Web Designing: HTML basics
                      Servlets Overview, Servlet Lifecycle: init(), service(),destroy(), Generic Servlet,Servlet
                      Request,
                      and Servlet Response, http Servlet Request, http Servlet Response and http Servlet,
                      Requestresponse, headers, GET, POST
                      JSP: JSP architecture, JSP tags and JSP expressions, Fixed Template Data ,Lifecycle of a JSP,
                      Model View Controller (MVC), Data Sharing among servlets & JSP, Request, application,
                      session and page scope, JSP implicit objects, isElignore attribute, buffer and auto flush
                      attributes, info attribute ,errorPage and is errorPage attributes, is Thread safe Attribute,
                      extends
                      attribute, language attribute, Including files and applets in jsp Pages, using java beans
                      components in JSP documents.
                      Struts Framework: Struts Architecture, Struts classes ActionForward, ActionForm,
                      ActionServlet, Action classes, Understanding struts config. xml, Understanding Action
                      Mappings, Struts flow with an example application.
                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. Naughton & Schildt “The Complete Reference Java 2”, Tata McGraw Hill<br>
                      2. Deitel “Java- How to Program:” Pearson Education, Asia<br>
                      3. Horstmann & Cornell “Core Java 2” (Vol I & II ) , Sun Microsystems<br>
                      4. lvan Bayross “Java 2.0” : BPB publications 5. Ivor Horton’s “Beginning Java 2, JDK 5 Ed.,
                      Wiley India. Note : Paper is to be set unit wise with internal choice.<br>
                      5. Internet and World Wide Web – How to program by Dietel and Nieto PHI/Pearson
                      Education Asia.<br>
                      6. Jakarta Struts Cookbook, Bill Siggelkow, S P D O’Reilly for chap 8<br>
                      7 An Introduction to web Design and Programming –Wang Thomson<br>
                      8 Web Applications Technologies Concepts- Knuckles,John Wiley
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    MCA 206 : Java and OOPS lab
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>(1) Write a Java program to determine maximum from given 100 numbers.<br>
                      (2) Write a Java program to calculate the factorial of a given numbers.<br>
                      (3) Java program to check whether a given character is alphabet or not.<br>
                      (4) Java program to find sum of all digits.<br>
                      (5) Write a Java program to add two binary numbers.<br>
                      (6) Write a Java program for switch statement.<br>
                      (7) Write a Java program to print perfect numbers<br>
                      (8) Write a Java program to convert a decimal number to binary number.<br>
                      (9) Write a Java program for Parameterized Constructor.<br>
                      (10) Write a Java program using while loop, do while loop, “for” loop.<br>
                      (11) Write a Java program to check whether number is Armstrong or not.<br>
                      (12) Write a Java program for Hierarchical Inheritance.<br>
                      (13) Write a Java program for abstract class and for interface.<br>
                      (14) Write a Java program to declare, initialize and display the contents of an array of 5
                      integer values. Also show in Java how the length of array can be found.<br>
                      (15) Write a program to accept a string and count total capital and small letters in string.<br>
                      (16) Write a Java program to print following output:
                      0,1,1,2,3…..(20 such items)<br>
                      (17) Write a Java program for method overloading and for method overriding.<br>
                      (18) Write a Java program to design a class Student that has three data member name ; Roll
                      no; Marks in five subject and member function to assign streams on the basis of table
                      given below<br>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Average marks </th>
                            <th scope="col">Stream</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>90% or more</td>
                            <td>Computer</td>
                          </tr>
                          <tr>
                            <td>80-90%</td>
                            <td>Electronics</td>
                          </tr>
                          <tr>
                            <td>75-80%</td>
                            <td>Mechanical</td>
                          </tr>
                          <tr>
                            <td>70-75%</td>
                            <td>Chemical</td>
                          </tr>
                          <tr>
                            <td>60-70%</td>
                            <td>Civil</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    MCA 207 : DBMS lab
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h6 style="font-size:18px;">PRACTICAL LIST : </h6>
                    <P>1. Create the following Databases</p>
                    <p><b>Salesmen</b></p>
                    <table class="table">
                      <thead style="border: 2px solid black;">
                        <tr>
                          <th scope="col">S no.</th>
                          <th scope="col">SNUM</th>
                          <th scope="col">SNAME</th>
                          <th scope="col">CITY</th>
                          <th scope="col">COMMISSION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>1001</td>
                          <td>Piyush</td>
                          <td>London</td>
                          <td>12%</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>1002</td>
                          <td>Sejal</td>
                          <td>Surat</td>
                          <td>13%</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>1004</td>
                          <td>Mithi</td>
                          <td>Rajesh</td>
                          <td>11%</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>1007</td>
                          <td>Rajesh</td>
                          <td>Baroda</td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>1003</td>
                          <td>Anand</td>
                          <td>New Delhi</td>
                          <td>10%</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>SNUM : A unique number assigned to each salesman.</p>
                    <p>SNAME : The name of salesman.</p>
                    <p>CITY : The location of salesmen.</p>
                    <p>COMMISSION : The Salemen's commission on orders.</p>
                    <br><br>
                    <p><b>Customers</b></p>
                    <table class="table">
                      <thead style="border: 2px solid black;">
                        <tr>
                          <th scope="col">S no.</th>
                          <th scope="col">CNUM</th>
                          <th scope="col">CNAME</th>
                          <th scope="col">CITY</th>
                          <th scope="col">RATING</th>
                          <th scope="col">SNUM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>2001</td>
                          <td>Harsh </td>
                          <td>London</td>
                          <td>100</td>
                          <td>1001</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>2002</td>
                          <td>Gita</td>
                          <td>Rome</td>
                          <td>200</td>
                          <td>1003</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>2003</td>
                          <td>Lalit</td>
                          <td>Surat</td>
                          <td>200</td>
                          <td>1002</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>2004</td>
                          <td>Govind</td>
                          <td>Bombay</td>
                          <td>300</td>
                          <td>1002</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>2006</td>
                          <td>Chirag</td>
                          <td>London</td>
                          <td>100</td>
                          <td>1001</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>2006</td>
                          <td>Chinmay</td>
                          <td>Surat</td>
                          <td>300</td>
                          <td>1007</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>2007</td>
                          <td>Pratik</td>
                          <td>Rome</td>
                          <td>100</td>
                          <td>1004</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>CNUM : A unique number assigned to each customer</p>
                    <p>CNAME : The name of the customer</p>
                    <p>CITY : The location of the customer</p>
                    <p>RATING : A level of preference indicator given to this customer</p>
                    <p>SNUM : The number of salesman assigned to this customer.</p>
                    <br><br>
                    <p><b>Orders</b></p>
                    <table class="table">
                      <thead style="border: 2px solid black;">
                        <tr>
                          <th scope="col">S no.</th>
                          <th scope="col">ONUM</th>
                          <th scope="col">AMOUNT</th>
                          <th scope="col">ODATE </th>
                          <th scope="col">CNUM</th>
                          <th scope="col">SNUM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>3001</td>
                          <td>18.69</td>
                          <td>10/03/97</td>
                          <td>2008</td>
                          <td>1007</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>3003</td>
                          <td>767.19</td>
                          <td>10/03/97</td>
                          <td>2001</td>
                          <td>1001</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>3002</td>
                          <td>1900.10</td>
                          <td>10/03/97</td>
                          <td>2007</td>
                          <td>1004</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>3005</td>
                          <td>5160.45 </td>
                          <td>10/03/97</td>
                          <td>2003</td>
                          <td>1002</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>3006</td>
                          <td>1098.16</td>
                          <td>10/03/97</td>
                          <td>2008</td>
                          <td>1007</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>3009</td>
                          <td>1713.23</td>
                          <td>10/04/97</td>
                          <td>2002</td>
                          <td>1003</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>3007</td>
                          <td>75.75</td>
                          <td>10/04/97</td>
                          <td>2004</td>
                          <td>1002</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>3008</td>
                          <td>4723.00</td>
                          <td>10/05/97</td>
                          <td>2006</td>
                          <td>1001</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>3010</td>
                          <td>1309.95</td>
                          <td>10/06/97</td>
                          <td>2004</td>
                          <td>1002</td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>3011</td>
                          <td>9891.88</td>
                          <td>10/06/97</td>
                          <td>2006</td>
                          <td>1001</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>ONUM : A unique number assigned to each order</p>
                    <p>AMOUNT : The amount of an order</p>
                    <p>ODATE : The date of an order.</p>
                    <p>CNUM : The number of customer making the order</p>
                    <p>SNUM : The number of salesman credited with the sale.</p>
                    <br>
                    <h6 style="font-size: 18px;"><b>Write queries :-</b></h6>
                    <p>
                      1. Produce the order no, amount and date of all orders.<br>
                      2. Give all the information about all the customers with salesma number 1001.<br>
                      3. Display the following information in the order of city, sname, snum and commission.<br>
                      4. List of rating followed by the name of each customer in Surat.<br>
                      5. List of snum of all salesmen with orders in order table without any duplicates.<br>
                      6. List of all orders for more than Rs. 1000.<br>
                      7. List of names and cities of all salesmen in London with commission above 10%.<br>
                      8.List all customers whose names begins with a letter 'C'.<br>
                      9. List all customers whose names begins with letter 'A' to 'G'.<br>
                      10. List all orders with zero or NULL amount.<br>
                      11.Find out the largest orders of salesman 1002 and 1007.<br>
                      12. Count all orders of October 3, 1997.<br>
                      13. Calculate the total amount ordered.<br>
                      14. Calculate the average amount ordered.<br>
                      15. Count the no. of salesmen currently having orders.<br>
                      16. List all salesmen with their % of commission.<br>
                      17. Assume each salesperson has a 12% commission. Write a query on the order table that will produce the order number, salesman no and the amount of commission for that order.<br>
                      18. Find the highest rating in each city in the form :<br> For the city (city), the highest rating is : (rating)<br>
                      19. List all in descending order of rating.<br>
                      20. Calculate the total of orders for each day and place the result in descending order.<br>
                      21. Show the name of all customers with their salesman's name.<br>
                      22. List all customers and salesmen who shared a same city.<br>
                      23. List all orders with the names of their customer and salesman.<br>
                      24. List all orders by the customers not located in the same city as their salesman.<br>
                      25. List all customers serviced by salespeople with commission above 12%.<br>
                      26. Calculate the amount of the salesman commission on each order by a customer with rating above 100.<br>
                      27. Find all pairs of customers having the same rating with out duplication.<br>
                      28. List all orders that are greater than the average of October 4,1997.<br>
                      29. Find the average commission of salesmen in London.<br>
                      30. Find all orders attributed to salesmen in 'London' using both the subquery and join methods.<br>
                      31. List the commission of all salesmen serving customers in 'London'.<br>
                      32. Find all customers whose cnum is 1000 above than the snum of Sejal. 'Surat'.<br>
                      34. Find all salesmen with customers located in their cities using ANY and IN.<br>
                      35. Find all salesmen for whom there are customers that follow them in alphabetical order.<br>
                      36. Find all customers having rating greater than any customer in 'Rome'.<br>
                      37.  List all orders that has amount grater than atleat one of the orders from 6th October, 1997.<br>
                      38. Find all orders with amounts smaller than any amount for a customer in 'London'.<br>
                      39. Find all the customers who have greater rating than every customer in 'Rome.<br>
                      40. Create a union of two queries that shows the names, cities and ratings of all customers. Those with rating of >= 200 should display 'HIGH RATING' and those with < 200 should display 'LOW RATING' . <br> 
                      41. Produce the name and number of each salesman and each customer with more than one current order in the alphabetical order of names. <br> 
                      42. Create union of three queries. First select snum of all salesman in Surat, second, the cnum of all customers in 'Surat' and third, the onum of all orders of 3rd Oct. Retain duplicates between the last two queries but remove the duplicates between either of them and the first.. <br>
                      43. Remove all orders from customer Chirag from the orders table. <br>
                      44. Set the ratings of all the customers of Piyush to 400. <br>
                      45. Increase the rating of all customers in Rome by 100.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--================= Footer Part Close ===============-->
        <div style="margin-right:7%; margin-top:2%;">
          <footer class="footer-distributed">
            <div class="footer-left">
              <h3>Quick Links</h3>
              <p class="footer-links">
                <a href="home.php" class="link-1">Home</a>
                <a href="home.php#service">Services</a>
                <a href="aboutus.php">About Us</a>
                <a href="feedback.php">Give Feedback</a>
                <a href="#" id="contact">Contact </a>
              </p>
            </div>

            <div class="footer-center">
              <div>
                <i class="fa fa-map-marker" id="location"></i>
                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
              </div>
              <div>
                <i class="fa fa-phone" id="phone"></i>
                <p>+1.555.555.5555</p>
              </div>
              <div>
                <i class="fa fa-envelope" id="email"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
              </div>
            </div>

            <div class="footer-right">
              <p class="footer-company-about">
                <span>About the site</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
                vehicula sit amet.
              </p>

              <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook" id="fb"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </footer>
        </div>
        <!--================= Footer Part Close ===============-->
  </header>
  <!---Navbar Hover Script-->
  <script>
    let hamMenuIcon = document.getElementById("ham-menu");
    let navBar = document.getElementById("nav-bar");
    let navLinks = navBar.querySelectorAll("li");

    hamMenuIcon.addEventListener("click", () => {
      navBar.classList.toggle("active");
      hamMenuIcon.classList.toggle("fa-times");
    });
    navLinks.forEach((navLinks) => {
      navLinks.addEventListener("click", () => {
        navBar.classList.remove("active");
        hamMenuIcon.classList.toggle("fa-times");
      });
    });
  </script>
</body>

</html>