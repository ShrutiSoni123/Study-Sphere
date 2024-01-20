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
  </style>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

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
        <div class="col-sm-3" id="abcd">
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
                    MCA 101 : Programming in C with Data Structure
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>Fundamentals of C Programming : Structure of a C Program, Data types, Identifiers and
                      keywords, Operators & expressions, Preprocessor directive, Input output, Casting, Precedence,
                      Scope of variables Control Constructs and Iteration Constructs Functions: Defining and
                      accessing: passing arguments, Function prototypes, Recursion, Storage classes</p>

                    <strong>UNIT II</strong>
                    <p>Arrays: Defining and processing, passing arrays to a function, Multi-dimensional arrays.
                      Strings, operations on strings.
                      Pointers : Pointer expression, pointer arithmetic Arrays of pointers, Function returning pointers,
                      Pointer to function, malloc(), calloc(), free(), Structures, Unions. File handling and related
                      functions
                    </p>

                    <strong>UNIT III</strong>
                    <p>Overview of Data Structure: Need for Data Structure, Execution Time, Algorithm Analysis,
                      Algorithm Complexity , Space Complexity , Time Complexity , Asymptotic Analysis,
                      Asymptotic Notations
                      Stack and Queue: Contiguous implementations of stack, various operations on stack, various
                      polish notations-infix, prefix, postfix, conversion from one to another-using stack, evaluation of
                      post and prefix expressions. Contiguous implementation of queue: Linear queue, its drawback,
                      circular queue, Enqueue Operation , Dequeue Operation, linked implementation of stack and
                      queue, isfull(), isempty() </p>

                    <strong>UNIT IV</strong>
                    <p>General List: list and it’s contiguous implementation, it’s drawback, singly linked list
                      operations on it, doubly linked list-operations, circular linked list; linked list using arrays.
                    </p>
                    <strong>UNIT V</strong>
                    <p>Trees: definitions-height, depth, order, degree, parent and child relationship etc; Binary
                      Treesvarious theorems, complete binary tree, almost complete binary tree; Tree
                      traversals-preorder,
                      in order and post order traversals, their recursive and non-recursive implementations;
                      expression tree- evaluation; linked representation of binary tree-operations. Threaded binary
                      trees; forests, conversion of forest into tree. Heap-definition. </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>1. Kerninghan & Ritchie “The C programming language”, PHI<br>
                      2. Schildt “C:The Complete reference” 4th ed TMH<br>
                      3. Kruse R.L. Data Structures and Program Design in C; PHI</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    MCA 102 : Statistical Mathematics
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <h6 style="font-size: 15px; padding-top:2px;">MATRICES AND EIGENVALUE PROBLEMS</h6>
                    <p>
                      Matrices - Rank of a Matrix - Consistently of a system of linear equations - Solution of the
                      matrix equation - Row - reduced Echelon Form - Eigenvalues and Eigenvectors -
                      Properties - Cayley - Hamilton Theorem - Inverse of a matrix.

                    </p>
                    <strong>UNIT II</strong>
                    <h6 style="font-size:15px; padding-top: 2px;">CALCULUS</h6>
                    <p>
                      Functions of a single variable, limit, continuity, differentiability, Mean value theorems,
                      indeterminate forms, L’Hospital’s rule, Maxima and minima, Product and chain rule, Beta and
                      gamma functions, Functions of multiple variables, limit, continuity, partial derivatives
                    </p>
                    <strong>UNIT III</strong>
                    <h6 style="font-size:15px; padding-top: 2px;">TESTING OF HYPOTHESIS</h6>
                    <p>
                      Sampling distributions - Tests based on small and large samples - Normal, Student’s t, Chisquare
                      and F distributions for testing of mean, variance and proportion and testing of difference
                      of means variances and proportions - Tests for independence of attributes and goodness of fit
                    </p>
                    <strong>UNIT IV</strong>
                    <h6 style="font-size:15px; padding-top: 2px;">PROBABILITY AND PROBABILTY DISTRIBUTION</h6>
                    <p>
                      Probability - Axioms of Probability - Conditional Probability - Addition and multiplication laws
                      of Probability, Probability mass function and Probability density functions Properties -
                      Binomial, Poisson, Normal distributions and their properties.
                    </p>
                    <strong>UNIT V</strong>
                    <h6 style="font-size:15px; padding-top: 2px;">Discrete Math</h6>
                    <p>
                      Sets, subsets, power sets, Counting functions, countability,
                      Basic proof techniques: induction, proof by contradiction, Basics of inductive,
                      deductive, and propositional logic, Basic data structures: stacks, queues, graphs,
                      arrays, hash tables, trees,Graph properties: connected components, degree,
                      maximum flow/minimum cut concepts, graph coloring
                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. B.S. Grewal, Higher Engineering Mathematics, Khanna Publishers, 43rd Edition, New Delhi,2015.
                      2. James Stewart ,calculus,7th edition
                      3. Miller and M. Miller, Mathematical Statistics, Pearson Education Inc., Asia 7th Edition,New
                      Delhi,
                      4.Richard Johnson, Miller and Freund's Probability and Statistics for Engineer, Prentice Hall of
                      India Private Ltd., 8th Edition, New Delhi, 2011..
                      5. D.C.Agarwal ,Discrete Structure, 5thedition,Bhopal
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    MCA 103 : Operating system and Architecture
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Register Transfer Language and Micro-operations: Concept of bus, data movement among
                      registers, a language to represent conditional data transfer, data movement from/to memory.
                      Design of simple Arithmetic & Logic Unit & Control Unit, arithmetic and logical operations
                      Along with register transfer, timing in register transfer.
                      Architecture of a simple processor: A simple computer organization and instruction set,
                      instruction formats, addressing modes, instruction cycle, instruction execution in terms of
                      microinstructions, interrupt cycle, concepts of interrupt and simple I/O organization,
                      Synchronous & Asynchronous data transfer, Data Transfer Mode: Program Controlled,
                      Interrupt driven, DMA (Direct Memory Access). Implementation of processor using the
                      building blocks. Pin Diagram of 8086, Architecture of 8086.
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Introduction: Evolution of operating systems (History of evolution of OS with the generations
                      of computers), Types of operating systems, Multitasking, Timesharing, Multithreading,
                      Multiprogramming and, Real time operating systems, Different views of the operating system,
                      System Programmer’s view, User’s view, Operating system concepts and structure, Layered
                      Operating Systems, Monolithic Systems. Processes: The Process concept, The process control
                      block, Systems programmer's view of processes, Operating system services for process
                      management, Scheduling algorithms, First come first serve, Round Robin, Shortest run time
                      next, Highest response ratio next, Multilevel Feedback Queues, Performance evaluation of
                      scheduling algorithms stated above
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Memory Management : Memory management without swapping or paging, Concepts of
                      swapping and paging, Page replacement algorithms namely, Least recently used, Optimal page
                      replacement, Most recently used, Clock page replacement, First in First out (This includes
                      discussion of Belady’s anomaly and the category of Stack algorithms), Modeling paging
                      algorithms, Design issues for paging system, Segmentation, Segmented Paging, Paged
                      Segmentation
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Inter-process Communication and Synchronization: The need for inter-process synchronization,
                      Concept of mutual exclusion, binary and counting semaphores, hardware support for mutual
                      exclusion, queuing implementation of semaphores, Classical problems in concurrent
                      programming, Dining Philosopher’s problem, Bounded Buffer Problem, Sleeping Barber
                      Problem, Readers and Writers problem, Critical section, critical region and conditional critical
                      region, Monitors and messages. Deadlocks: Concepts of deadlock detection, deadlock
                      prevention, deadlock avoidance. Banker’s Algorithm
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      File System: File systems, directories, file system implementation, security protection
                      mechanisms. Input/output: Principles of I/O Hardware: I/O devices, device controllers, direct
                      memory access. Principles of I/O software: Goals interrupt handlers, device drivers, and device
                      independent I/O software. User space I/O Software. Disks: Disk hardware, Disk scheduling
                      algorithms (namely First come first serve, shortest seek time first, SCAN, C-SCAN, LOOK and
                      C-LOOK algorithms) Error handling, track-at-a-time caching, RAM Disks. Clocks: Clock
                      hardware, memory-mapped terminals, I/O software
                    </p>
                    <strong>REFERENCE BOOK</strong>
                    <p>
                      1. Milenkovic, M., "Operating Systems - concepts and Design" McGraw Hill International
                      EditionComputer Science series 1992.<br>
                      2. Galvin P., J.L. Abraham Silberschatz. "Operating System Concepts". John Wiley & Sons
                      Company, 1989. 4. Tanenbaum, A.S. "Modern Operating System", Prentice Hall of India Pvt.
                      Ltd.1995.<br>
                      3. William Stallings “Operating Systems” , Prentice Hall of India Pvt. Ltd.<br>
                      4. M. Morris Mano, “Computer System Architecture”, PHI, 3rd edition, 1993<br>
                      5. Liu and Gibson, “8086/8088 Micro processor Assembly Language”
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    MCA 104 : Information Technology
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Introduction and basic concept of modern communication and technology: CDMA, WLL, GSM,
                      VOIP, Bluetooth, WI-Fi, Communication Technology: 2G, 3G, 4G, And 5G. Communication
                      over radio, microwave systems, Communication satellite, radar, fiber optics, ISDN-their
                      properties, Geographic Information System (GIS), Components of a GIS- H/W,S/W, Data,
                      people, methods, working and application of GIS.
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Information Security: Introduction, malicious programs, cryptography, digital signature,
                      Firewall, Users Identification and Authentication, Security awareness and policies, Application
                      areas requiring security. Mobile Commerce: Introduction, Growth, Success Stories of Mobile
                      commerce, Technologies for mobile commerce, M-commerce in India, Digital Marketing.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Artificial Intelligence: Concept of Artificial Intelligence, Introduction to branches of
                      Artificial
                      Intelligence: Machine Learning, Neural Network, Robotics, Natural Language Processing,
                      Expert System, and Fuzzy Logic. Applications of all the branches of AI, General application of
                      AI.
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Introduction to IoT: Characteristics of IoT, physical design of IoT, Logical design of IoT,
                      Functional blocks of IoT, home Automation, Industry applications, Surveillance and other IoT
                      applications. Introduction to Virtual Reality (VR): Defintion, Application of VR, Smart Systems,
                      Embedded Systems.
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Computing and Cloud Computing: History of Centralized and Distributed Computing,
                      Overview of Distributed Computing, Cluster computing, Grid computing. Introduction to
                      Cloud Computing- Cloud issues and challenges – Properties – Characteristics – Service models,
                      Deployment models. Cloud resources: Network and API – Virtual and Physical computational
                      resources – Data-storage.
                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. Introduction to Information Technology – ITL Education Solutions Ltd.,Seventh
                      Impression, Pearson Education 2008.<br>
                      2. Concepts in Computing-Kenneth Hoganson, First Indian Edition, Jones & Bartlett
                      Publishers, Inc. 2010<br>
                      3. Computer Networks – Andrew S. Tanenbaum, 4th Edition, Pearson Education.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    MCA 105 : Communication Skills
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>UNIT I</strong>
                    <p>
                      Listening: Barriers of Listening skill-Approaches to Listening –How to improve Listening
                      exercises. Speaking: Paralanguage: Sounds, stress, intonation- Art of conversation –
                      Presentation skills – Public speaking- Expressing Techniques
                    </p>
                    <strong>UNIT II</strong>
                    <p>
                      Reading: Kinds of Reading – Causes of reading difficulties – Reading strategies – exercises.
                      Writing: Effective writing – Paragraph ,Essay, Reports, Letters, Articles, Notices, Agenda &
                      Minutes.
                    </p>
                    <strong>UNIT III</strong>
                    <p>
                      Communication: Modes of Communication- Barriers – Interpersonal skills , Negotiation skills
                      Non- Verbal communication – Etiquettes
                    </p>
                    <strong>UNIT IV</strong>
                    <p>
                      Group Dynamic skills: Group Discussion – Team building & Team work – Be a manager or
                      leader – Decision making – creativity – Time & Stress management skills.
                    </p>
                    <strong>UNIT V</strong>
                    <p>
                      Interview skills: Types of Interviews – Preparing for interview – Preparing a CV – Structuring
                      the interview , Mock Interview _ Quick Tips.
                    </p>
                    <strong>REFERENCE BOOKS:</strong>
                    <p>
                      1. Sanghi, Seema, Improve your communication skills. 2nd edition.<br>
                      2. Burnard, Philip. Interpersonal skills Training: A source book of activities. 2005.<br>
                      3. Ashley, Roderic. How to enhance your employability. 1998.<br>
                      4. Dr. Alex, K. Soft sill: know yourself & Know the world. 2010.<br>
                      5. Cornerstone. Developing softskills. 4th edition 2005.<br>
                      6. Jones, Daniel. An outline of English phonetics.<br>
                      7. Aggarwal, Rohini. Business communication and Organization & Management.<br>
                      8. Grath. E.H. Basic Managerial skills for all.<br>
                      9. Maxwell, John C. Developing the leader within you.<br>
                      10. Sunitha, V. Personality Development & communicative English
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    MCA 106 : C and DS Lab
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      1. Program using control structure (if else.. Switch..)<br>
                      2. Program using iterative structure ( for… While…)<br>
                      3. Array Manipulation Program<br>
                      4. String manipulation programs<br>
                      5. Program using structures<br>
                      6. Program for Stack<br>
                      7. Implement Stack using Linked lists use it to convert infix expression to postfix
                      expression.<br>
                      8. Program for Queue using pointers<br>
                      9. Linked List Using Arrays<br>
                      10. Program for Linked list using pointers<br>
                      11. Program using Dynamic allocation operator<br>
                      12. File handling program
                      13. Program for Trees
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    MCA 107 : Operating System Lab
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      1. Program for CPU Scheduling Algorithms to find turnaround time and waiting time.<br>
                      &nbsp; &nbsp;(a) FCFS <br>
                      &nbsp; &nbsp;(b) SJF <br>
                      &nbsp; &nbsp;(c) Round Robin (pre-emptive) <br>
                      &nbsp; &nbsp;(d) Priority<br>
                      2. Program for File Allocation Strategies - <br>
                      &nbsp; &nbsp;(a) Sequential<br>
                      &nbsp; &nbsp;(b) Indexed<br>
                      &nbsp; &nbsp;(c) Linked Memory<br>
                      3. Program to simulate the following contiguous memory allocation techniques<br>
                      &nbsp; &nbsp;(a)Worst-fit<br>
                      &nbsp; &nbsp;(b) Best-fit<br>
                      &nbsp; &nbsp;(c) First-fit<br>
                      4. Program for any one of Deadlock Management Techniques<br>
                      5. Program to simulate disk scheduling algorithms <br>
                      &nbsp; &nbsp;(a) FCFS<br>
                      &nbsp; &nbsp;(b) SCAN<br>
                      &nbsp; &nbsp;(c) C-SCAN<br>
                      6. Program for Page Replacement Algorithms <br>
                      &nbsp; &nbsp;(a) FIFO <br>
                      &nbsp; &nbsp;(b) LRU <br>
                      &nbsp; &nbsp;(c) LFU<br>
                      7. Program to simulate producer-consumer problem using semaphores<br>
                      8. Program to simulate the concept of Dining-Philosophers problem.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--================= Footer Part Start ===============-->
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