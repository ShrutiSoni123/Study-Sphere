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
                <div class="col-sm-3">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" href="Syllabus.php">MCA Sem I</a>
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
                                        MCA 301 : Data Mining
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <p>Motivation, importance, Data type for Data Mining : relation Databases, Data
                                            Warehouses, Transactional databases, advanced database system and its
                                            applications, Data
                                            mining Functionalities: Concept/Class description, Association Analysis
                                            classification &
                                            Prediction, Cluster Analysis, Outlier Analysis, Evolution Analysis,
                                            Classification of Data Mining
                                            Systems, Major Issues in Data Mining.</p>
                                        <strong>UNIT II</strong>
                                        <p>
                                            Data Warehouse and OLAP Technology for Data Mining: Differences between
                                            Operational Database Systems and Data Warehouses, a multidimensional Data
                                            Model, Data
                                            Warehouse Architecture, Data Warehouse Architecture, Data Warehouse
                                            Implementation, Data
                                            Cube Technology.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <p>
                                            Data Preprocessing: Data Cleaning, Data Integration and Transformation, Data
                                            Reduction, Discretization and Concept Hierarchy Generation. Data Mining
                                            Primitives,
                                            Languages, and System Architectures, Concept Description: Characterization
                                            and Comparison,
                                            Analytical Characterization.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <p>
                                            Mining Association Rules in Large Databases: Association Rule Mining: Market
                                            Basket Analysis, Basic Concepts, Mining Single-Dimensional Boolean
                                            Association Rules from
                                            Transactional Databases: the Apriori algorithm, Generating Association rules
                                            from Frequent
                                            items, Improving the efficiency of Apriory, Mining Multilevel Association
                                            Rules,
                                            Multidimensional Association Rules, Constraint-Based Association Mining.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <p>
                                            Classification & Prediction and Cluster Analysis: Issues regarding
                                            classification &
                                            prediction, Different Classification Methods, Prediction, Cluster Analysis,
                                            Major Clustering
                                            Methods, Applications & Trends in Data Mining: Data Mining Applications,
                                            currently available
                                            tools.

                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. J. Han and M. Kamber, “Data Mining: Concepts and Techniques”, Morgan
                                            Kaufmann Pub.<br>
                                            2.Berson “Dataware housing, Data Mining & DLAP, @004, TMH.<br>
                                            3. W.H. Inmon “ Building the Datawarehouse, 3ed, Wiley India.<br>
                                            4. Anahory, “Data Warehousing in Real World”, Pearson Education.<br>
                                            5. Adriaans, “Data Mining”, Pearson Education.<br>
                                            6. S.K. Pujari, “Data Mining Techniques”, University Press, Hyderabad
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        MCA 302 : Artificial Intelligence
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <p>
                                            General Issues and Overview of AI The AI problems, what is an AI technique,
                                            Characteristics of AI applications. Introduction to LISP programming: Syntax
                                            and numeric
                                            functions, Basic list manipulation functions, predicates and conditionals,
                                            input output and local
                                            variables, iteraction and recursion, property lists and arrays.
                                        </p>
                                        <strong>UNIT II</strong>
                                        <p>
                                            Problem Solving, Search and Control Strategies General problem solving,
                                            production
                                            systems, control strategies forward and backward chaining, exhausive
                                            searches depth first
                                            breadth first search. Heuristic Search Techniques Hill climbing, branch and
                                            bound technique,
                                            best first search & A* algorithm, AND / OR graphs, problem reduction & AO*
                                            algorithm,
                                            constraint satisfaction problems.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <p>
                                            Knowledge Representations First order predicate calculus, skolemization,
                                            resolution
                                            principle & unification, interface mechanisms, horn's clauses, semantic
                                            networks, frame systems
                                            and value inheritance, scripts, conceptual dependency.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <p>
                                            Natural Language processing Parsing techniques, context free grammer,
                                            recursive
                                            transitions nets (RNT), augmented transition nets (ATN), case and logic
                                            grammers, symantic
                                            analysis. Game playing Minimax search procedure, alpha-beta cutoffs,
                                            additional refinments.
                                            Planning Overview an example domain the block word, component of planning
                                            systems, goal
                                            stack planning, non linear planning
                                        </p>
                                        <strong>UNIT V</strong>
                                        <p>
                                            Probabilistic Reasoning and Uncertainty Probability theory, bayes theorem
                                            and
                                            bayesian networks, certainty factor.
                                            Expert Systems Introduction to expert system and application of expert
                                            systems, various
                                            expert system shells, vidwan frame work, knowledge acquisition, case
                                            studies, MYCIN.
                                            Learning Rote learning, learning by induction, explanation based learning
                                        </p>
                                        <strong>REFERENCE BOOK</strong>
                                        <p>
                                            1. Elaine Rich and Kevin Knight “Artifical Intelligence” - Tata McGraw
                                            Hill.<br>
                                            2. “Artifical Intelligence” 4 ed. Pearson.<br>
                                            3. Dan W. Patterson “Introduction to Artifical Intelligence and Expert
                                            Systems”, Prentice India.<br>
                                            4. Nils J. Nilson “Principles of Artifical Intelligence”, Narosa Publishing
                                            House.<br>
                                            5. Clocksin & C.S.Melish “Programming in PROLOG”, Narosa Publishing
                                            House.<br>
                                            6. M.Sasikumar,S.Ramani etc. “Rule based Expert System”, Narosa Publishing
                                            House.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        MCA 303 : Elective - I (1) PYTHON PROGRAMMING
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">INTRODUCTION TO PYTHON:</h6>
                                        <p>
                                            Python interpreter and interactive mode; values and types: int, float,
                                            boolean, string, and list;
                                            variables, expressions, statements, tuple assignment, precedence of
                                            operators, comments;
                                            modules and functions, function definition and use, flow of execution,
                                            parameters and
                                            arguments; Illustrative programs: exchange the values of two variables,
                                            circulate the values of n
                                            variables, distance between two points.
                                        </p>
                                        <strong>UNIT II</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">CONTROL FLOW, FUNCTIONS</h6>
                                        <p>
                                            Conditionals: Boolean values and operators, conditional (if), alternative
                                            (if-else), chained
                                            conditional (if-elif-else); Iteration: state, while, for, break, continue,
                                            pass; Fruitful functions:
                                            return values, parameters, local and global scope, function composition,
                                            recursion; Strings:
                                            string slices,
                                            immutability, string functions and methods, string module; Lists as arrays.
                                            Illustrative
                                            programs: square root, gcd, exponentiation, sum an array of numbers, linear
                                            search, binary
                                            search.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">LISTS, TUPLES, DICTIONARIES</h6>
                                        <p>
                                            Lists: list operations, list slices, list methods, list loop, mutability,
                                            aliasing, cloning lists, list
                                            parameters; Tuples: tuple assignment, tuple as return value; Dictionaries:
                                            operations and
                                            methods; advanced list processing – list comprehension; Illustrative
                                            programs: Sorting and
                                            Searching.

                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">Classes and Inheritance:</h6>
                                        <p>
                                            Object Oriented Programming, Class Instances, Methods Classes
                                            Examples, Why OOP, Hierarchies, Your Own Types – An Extended Example:
                                            Building a Class,
                                            Visualizing the Hierarchy, Adding another Class, Using Inherited Methods
                                        </p>
                                        <strong>UNIT V</strong>

                                        <h6 style="font-size: 15px; padding-top:2px;">FILES, MODULES, PACKAGES </h6>
                                        <p> Files and exception: text files, reading and writing files, format operator;
                                            command line
                                            arguments, errors and exceptions, handling exceptions, modules, packages;
                                            Illustrative
                                            programs: word count, copy file.
                                        </p>
                                        <strong>REFERENCE BOOK</strong>
                                        <p>
                                            1. ReemaThareja, “Python Programming using Problem Solving Approach”, Oxford
                                            University Press, 2017<br>
                                            2. Allen B. Downey, “Think Python: How to Think Like a Computer Scientist”,
                                            SecondEdition, Shroff O‘Reilly Publishers, 2016
                                            (http://greenteapress.com/wp/thinkpython/)<br>
                                            3. Guido van Rossum, Fred L. Drake Jr., “An Introduction to Python – Revised
                                            andUpdated forPython 3.2, Network Theory Ltd., Edition2011
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        MCA 303 : Elective - I (2) Web Technology
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">Concept of Internet:</h6>
                                        <p>
                                            Client/Server model,Internet and WWW, IP, URL, ISP, DNS; Web Design :
                                            Principals of effective Web Design, Page layout and linking, designing
                                            effective navigation for
                                            your website, planning and publishing websites, Responsive web design :
                                            Responsive vs
                                            adaptive web design
                                        </p>
                                        <strong>UNIT II</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">HTML and Style Sheets:</h6>
                                        <p>
                                            Working with HTML - Formatting and Fonts, Basic Tags, Hyperlinks,
                                            Tables, Images, Forms, XHTML, Meta tags. Style Sheets (CSS): Introduction,
                                            Need, basic syntax
                                            and structure, class, id, background Images, Colors and Properties,
                                            Manipulating Texts,
                                            Margins, Positioning.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">Javascript:</h6>
                                        <p>
                                            Client side scripting with JavaScript, Data Types and Variables,
                                            Expressions,
                                            Operators and Statements, Objects and Arrays, Functions, loops, Classes,
                                            Modules, DOM,
                                            Forms and Validations.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 15px; padding-top:2px;">XML:</h6>
                                        <p>
                                            Introduction, Features, Anatomy, Declaration, Uses, Key Components, DTD and
                                            Schema,
                                            Markup Elements and Attributes, XML Objects, XML Scripting, Using XML with
                                            application,
                                            Transforming XML using XSL and XSLT, XPATH - Template Based Transformations.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <h6 style="font-size: 15x; padding-top:2px;">Introduction to AJAX:</h6>
                                        <p>
                                            AJAX Components, The XMLHttpRequest Object, Using XSLT with
                                            AJAX; Webservices : Web Service architecture, introduction to webservices,
                                            Web Services VS
                                            other technologies, Web Services Benefits
                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1.Jeffrey C. Jackson, "Web Technologies--A Computer Science Perspective",
                                            Pearson Education, 2006.<br>
                                            2.Developing Web Applications, Ralph Moseley and M. T. Savaliya,
                                            Wiley-India<br>
                                            3.Web Technologies, Black Book, dreamtech Press<br>
                                            4.Web Design, Joel Sklar, Cengage Learning<br>
                                            5.Internet and World Wide Web How to program, P.J. Deitel & H.M. Deitel
                                            Pearson.<br>
                                            6.Steven Holzner,”HTML Black Book”, Dremtech press.<br>
                                            7.Kogent Learning Web Technologies: HTML, Javascript Wiley India
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        MCA 303 : Elective - I (3) Introduction to Data Science and Big Data
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 15px; padding-top: 2px;">INTRODUCTION TO DATA SCIENCE AND
                                            BIG DATA </h6>
                                        <p>
                                            Introduction to Data Science – Data Science Process – Exploratory Data
                                            analysis – Big data:
                                            Definition, Risks of Big Data, Structure of Big Data – Web Data: The
                                            Original Big Data –
                                            Evolution Of Analytic Scalability – Analytic Processes and Tools – Analysis
                                            versus Reporting –
                                            Core Analytics versus Advanced Analytics– Modern Data Analytic Tools –
                                            Statistical Concepts:
                                            Sampling Distributions – Re-Sampling – Statistical Inference – Introduction
                                            to Data
                                            Visualization.
                                        </p>
                                        <strong>UNIT II</strong>
                                        <h6 style="font-size: 15px; padding-top: 2px;">DATA ANALYSIS USING R </h6>
                                        <p>
                                            Univariate Analysis: Frequency, Mean, Median, Mode, Variance, Standard
                                            Deviation, Skewness
                                            and Kurtosis – Bivariate Analysis: Correlation – Regression Modeling: Linear
                                            and Logistic
                                            Regression – Multivariate Analysis – Graphical representation of Univariate,
                                            Bivariate and
                                            Multivariate Analysis in R: Bar Plot, Histogram, Box Plot, Line Plot,
                                            Scatter Plot, Lattice Plot,
                                            Regression Line, Two-Way cross Tabulation.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 15px; padding-top: 2px;">DATA MODELING</h6>
                                        <p>
                                            Bayesian Modeling – Support Vector and Kernel Methods – Neuro – Fuzzy
                                            Modeling –
                                            Principal Component Analysis – Introduction to NoSQL: CAP Theorem, MongoDB:
                                            RDBMS
                                            VsMongoDB, Mongo DB Database Model, Data Types and Sharding – Data Modeling
                                            in HBase:
                                            Defining Schema – CRUD Operations
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 15px; padding-top: 2px;">DATA ANALYTICAL FRAMEWORKS </h6>
                                        <p>
                                            Introduction to Hadoop: Hadoop Overview – RDBMS versus Hadoop – HDFS (Hadoop
                                            Distributed File System): Components and Block Replication – Introduction to
                                            MapReduce –
                                            Running Algorithms Using MapReduce – Introduction to HBase: HBase
                                            Architecture, HLog
                                            and HFile, Data Replication – Introduction to Hive, Spark and Apache Sqoop.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <h6 style="font-size: 15px; padding-top: 2px;">STREAM ANALYTICS</h6>
                                        <p>
                                            Introduction To Streams Concepts – Stream Data Model and Architecture –
                                            Stream Computing
                                            – Sampling Data in a Stream – Filtering Streams – Counting Distinct Elements
                                            in a Stream –
                                            Estimating Moments – Counting Oneness in a Window – Decaying Window.
                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. Bill Franks, “Taming the Big Data Tidal Wave: Finding Opportunities in
                                            Huge Data
                                            Streams with Advanced Analytics”, John Wiley & sons<br>
                                            2. Rachel Schutt, Cathy O'Neil, “Doing Data Science”, O'Reilly
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        MCA 304 : Elective - II (1) Machine Learning
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <p>
                                            Introduction to machine learning, scope and limitations, regression,
                                            probability,
                                            statistics and linear algebra for machine learning, convex optimization,
                                            data visualization,
                                            hypothesis function and testing, data distributions, data preprocessing,
                                            data augmentation,
                                            normalizing data sets, machine learning models, supervised and unsupervised
                                            learning.
                                        </p>
                                        <strong>UNIT II</strong>
                                        <p>
                                            Linearity vs non linearity, activation functions like sigmoid, ReLU, etc.,
                                            weights and
                                            bias, loss function, gradient descent, multilayer network, backpropagation,
                                            weight initialization,
                                            training, testing, unstable gradient problem, auto encoders, batch
                                            normalization, dropout, L1
                                            and L2 regularization, momentum, tuning hyper parameters
                                        </p>
                                        <strong>UNIT III</strong>
                                        <p>
                                            Convolutional neural network, flattening, subsampling, padding, stride,
                                            convolution
                                            layer, pooling layer, loss layer, dance layer 1x1 convolution, inception
                                            network, input channels,
                                            transfer learning, one shot learning, dimension reductions, implementation
                                            of CNN like tensor
                                            flow, keras etc.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <p>
                                            Recurrent neural network, Long short-term memory, gated recurrent unit,
                                            translation,
                                            beam search and width, Bleu score, attention model, Reinforcement Learning,
                                            RL-framework,
                                            MDP, Bellman equations, Value Iteration and Policy Iteration, , Actor-critic
                                            model, Q-learning,
                                            SARSA
                                        </p>
                                        <strong>UNIT V</strong>
                                        <p>
                                            Support Vector Machines, Bayesian learning, application of machine learning
                                            in
                                            computer vision, speech processing, natural language processing etc, Case
                                            Study: ImageNet
                                            Competition
                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. Aurelien Geon, “Hands-On Machine Learning with Scikit-Learn and
                                            Tensorflow: Concepts,
                                            Tools, and Techniques to Build Intelligent Systems”, Shroff/O'Reilly; First
                                            edition (2017).<br>
                                            2. Francois Chollet, "Deep Learning with Python", Manning Publications, 1
                                            edition (10 January
                                            2018).<br>
                                            3. Andreas Muller, "Introduction to Machine Learning with Python: A Guide
                                            for Data
                                            Scientists", Shroff/O'Reilly; First edition (2016).<br>
                                            4. Russell, S. and Norvig, N. “Artificial Intelligence: A Modern Approach”,
                                            Prentice Hall Series
                                            in Artificial Intelligence. 2003.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        MCA 304 : Elective - II (2) SOFT COMPUTING
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <p>
                                            Overview of Soft Computing, Difference between Soft and Hard computing,
                                            Brief
                                            descriptions of different components of soft computing including Artificial
                                            intelligence systems
                                            Neural networks, fuzzy logic, genetic algorithms. Artificial neural networks
                                            Vs Biological
                                            neural networks, ANN architecture, Basic building block of an artificial
                                            neuron, Activation
                                            functions, Introduction to Early ANN architectures (basics only)-McCulloch &
                                            Pitts model,
                                            Perceptron, ADALINE, MADALINE
                                        </p>
                                        <strong>UNIT II</strong>
                                        <p>
                                            Artificial Neural Networks: Supervised Learning: Introduction and how brain
                                            works,
                                            Neuron as a simple computing element, The perceptron, Backpropagation
                                            networks:
                                            architecture, multilayer perceptron, backpropagation learning-input layer,
                                            accelerated learning
                                            in multilayer perceptron, The Hopfield network, Bidirectional associative
                                            memories (BAM),
                                            RBF Neural Network.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <p>
                                            Artificial Neural Networks: Unsupervised Learning: Hebbian Learning,
                                            Generalized
                                            Hebbian learning algorithm, Competitive learning, Self- Organizing
                                            Computational Maps:
                                            Kohonen Network.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <p>
                                            Fuzzy Logic Crisp & fuzzy sets fuzzy relations fuzzy conditional statements
                                            fuzzy
                                            rules fuzzy algorithm. Fuzzy logic controller.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <p>
                                            Genetic algorithms basic concepts, encoding, fitness function,
                                            reproduction-Roulette
                                            wheel, Boltzmann, tournament, rank, and steady state selections, Convergence
                                            of GA,
                                            Applications of GA case studies. Introduction to genetic programming- basic
                                            concepts.
                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. R. Rajasekaran and G. A and Vijayalakshmi Pa, Neural Networks, Fuzzy
                                            Logic, and Genetic
                                            Algorithms: Synthesis and Applications, Prentice Hall of India<br>
                                            2. D. E. Goldberg, Genetic Algorithms in Search, Optimisation, and Machine
                                            Learning,
                                            Addison-Wesley
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        MCA 304 : Elective - II (3) Internet of Things
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <p>
                                            Introduction: Definition, Characteristics of IOT, IOT Conceptual framework,
                                            IOT
                                            Architectural view, Physical design of IOT, Logical design of IOT,
                                            Application of IOT.
                                        </p>
                                        <strong>UNIT II</strong>
                                        <p>
                                            Machine-to-machine (M2M), SDN (software defined networking) and NFV (network
                                            function virtualization) for IOT, data storage in IOT, IOT Cloud Based
                                            Services.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <p>
                                            Design Principles for Web Connectivity: Web Communication Protocols for
                                            connected
                                            devices, Message Communication Protocols for connected devices, SOAP, REST,
                                            HTTP
                                            Restful and Web Sockets. Internet Connectivity Principles: Internet
                                            Connectivity, Internet
                                            based communication, IP addressing in IOT, Media Accesscontrol.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <p>
                                            Sensor Technology , Participatory Sensing, Industrial IOT and Automotive IOT
                                            , Actuator,
                                            Sensor data Communication Protocols ,Radio Frequency Identification
                                            Technology,
                                            Wireless Sensor NetworkTechnology
                                        </p>
                                        <strong>UNIT V</strong>
                                        <p>
                                            IOT Design methodology: Specification -Requirement, process, model, service,
                                            functional
                                            & operational view.IOT Privacy and security solutions, Raspberry Pi &arduino
                                            devices.
                                            IOT Case studies: smart city streetlights control & monitoring.

                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. Rajkamal,”Internet of Things”, Tata McGraw Hill publication.<br>
                                            2. Vijay Madisetti and ArshdeepBahga, “Internet of
                                            things(AHand-on-Approach)” 1st Edition ,UniversalPress. <br>
                                            3. HakimaChaouchi “The Internet of Things: Connecting Objects”, Wiley
                                            publication.<br>
                                            4. Charless Bell “MySQL for the Internet of things”, Apresspublications.<br>
                                            5. Francis dacosta “Rethinking the Internet of things:A
                                            scalable Approach to connecting everything”, 1st edition, Apress
                                            publications2013.<br>
                                            6. Donald Norris“The Internet of Things: Do-It-Yourself at
                                            Home Projects for Arduino, Raspberry Pi and BeagleBone Black”, McGraw
                                            Hillpublication.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        MCA 305 : Elective - III (1) Computer Ethics
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">An Overview of Ethics:</h6>
                                        <p>
                                            Ethics: Definition of Ethics, The Importance of Integrity, The
                                            Difference between Morals, Ethics, and Laws. Ethics in the Business World:
                                            Why Fostering
                                            Good Business Ethics Is Important, Improving Corporate Ethics, Creating an
                                            Ethical Work
                                            Environment, Including Ethical Considerations in Decision Making. Ethics in
                                            Information
                                            Technology Ethics for IT Workers and IT Users: IT Technicians, IT
                                            Professionals: Are IT
                                            Workers Professionals, The Changing Professional Services Industry,
                                            Professional Relationships
                                            That Must Be Managed, Professional Codes of Ethics, Professional
                                            Organizations, Certification,
                                            Government Licensing, IT Professional Malpractice. IT Users, Common Ethical
                                            Issues for IT
                                            Users, Supporting the Ethical Practices of IT Users.

                                        </p>
                                        <strong>UNIT II</strong>

                                        <h6 style="font-size: 13px; padding-top: 2px;">Computer and Internet Crime</h6>
                                        <p>
                                            IT Security Incidents: A Major Concern, Why
                                            Computer Incidents Are So Prevalent, Types of Exploits, Types of
                                            Perpetrators, Federal Laws
                                            for Prosecuting Computer Attacks, Implementing Trustworthy Computing: Risk
                                            Assessment,
                                            Establishing a Security Policy, Educating Employees, Contractors, and
                                            Part-Time Workers,
                                            Prevention, Detection, Response. Privacy: Privacy Concerns Abound with New
                                            IRS Systems,
                                            Privacy Protection and the Law: Information Privacy, Privacy Laws,
                                            Applications, and Court
                                            Rulings. Key Privacy and Anonymity Issues: Identity Theft, Consumer
                                            Profiling, Treating
                                            Consumer Data Responsibly, Workplace Monitoring, Advanced Surveillance
                                            Technology.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Freedom of Expression:</h6>
                                        <p>
                                            First Amendment Rights, Obscene Speech, Defamation,
                                            Freedom of Expression: Key Issues, Controlling Access to Information on the
                                            Internet,
                                            Anonymity on the Internet, Defamation and Hate Speech, Corporate Blogging,
                                            Pornography.
                                            Intellectual Property: What Is Intellectual Property? Copyrights: Copyright
                                            Term, Eligible
                                            Works, Fair Use Doctrine, Software Copyright Protection, The Prioritizing
                                            Resources and
                                            Organization for Intellectual Property (PRO-IP) Act of 2008, General
                                            Agreement on Tariffs and
                                            Trade (GATT), The WTO and the WTO TRIPS Agreement (1994), The World
                                            Intellectual
                                            Property Organization (WIPO) Copyright Treaty (1996), The Digital Millennium
                                            Copyright Act
                                            (1998), Patents: Software Patents, Software Cross-Licensing Agreements,
                                            Defensive Publishing
                                            and Patent Trolls, Submarine Patents and Patent Farming. Trade Secrets:
                                            Trade Secret Laws,
                                            Employees and Trade Secrets, Key Intellectual Property Issues: Plagiarism,
                                            Reverse
                                            Engineering, Open Source Code, Competitive Intelligence, Cybersquatting

                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Software Development:</h6>
                                        <p>
                                            Strategies for Engineering Quality Software,:The Importance
                                            of Software Quality, Software Product Liability, Software Development
                                            Process, Capability
                                            Maturity Model Integration. Key Issues in Software Development, Development
                                            of SafetyCritical Systems, Quality Management Standards The Impact of
                                            Information Technology on
                                            Productivity and Quality of Life: The Impact of IT on the Standard of Living
                                            and Worker
                                            Productivity, IT Investment and Productivity, The Digital Divide, The Impact
                                            of IT on
                                            Healthcare Costs, Electronic Health Records, Use of Mobile and Wireless
                                            Technology in the
                                            Healthcare Industry, Telemedicine, Medical Information Web Sites for
                                            Laypeople
                                        </p>
                                        <strong>UNIT V</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Social Networking:</h6>
                                        <p>
                                            What Is a Social Networking Web Site? Business Applications of
                                            Online Social Networking, Social Network Advertising, The Use of Social
                                            Networks in the
                                            Hiring Process, Social Shopping Web Sites, Social Networking Ethical Issues,
                                            Cyberbullying,
                                            Cyberstalking, Encounters with Sexual Predators, Uploading of Inappropriate
                                            Material, Online
                                            Virtual Worlds, Crime in Virtual Worlds, Educational and Business Uses of
                                            Virtual Worlds.
                                            Ethics of IT Organizations: Key Ethical Issues for Organizations, The Need
                                            for Nontraditional
                                            Workers, Contingent Workers, Advantages of Using Contingent Workers,
                                            Disadvantages of
                                            Using Contingent Workers, Deciding When to Use Contingent, Outsourcing,
                                            Offshore
                                            Outsourcing, Pros and Cons of Offshore Outsourcing, Strategies for
                                            Successful Offshore
                                            Outsourcing, Whistle-Blowing, Protection for Whistle-Blowers,
                                            Whistle-Blowing Protection for
                                            Private-Sector Workers, Dealing with a Whistle-Blowing Situation, Green
                                            Computing, ICT
                                            Industry Code of Conduct.

                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. George W. Reynolds, ETHICS IN INFORMATION TECHNOLOGY, Third Edition,
                                            Course
                                            Technology, ISBN-13: 978-0-538-74622-9, Cengage Learning.<br>
                                            2. Deborah Johnson, Computer Ethics, Fourth Edition<br>
                                            3. Richard Spinello and Herman Tavani, CyberEthics, 2nd Edition
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        MCA 305 : Elective - III (2) Advanced DBMS
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">I Introduction to Distributed
                                            Systems :</h6>
                                        <p>
                                            Goals of Distributed Systems, Hardware and
                                            Software concepts, the client server model, Remote procedure call, remote
                                            object invocation,
                                            message and stream oriented communications.
                                        </p>
                                        <strong>UNIT II</strong>

                                        <h6 style="font-size: 13px; padding-top: 2px;"> Process and synchronization in
                                            Distributed Systems :</h6>
                                        <p>
                                            Threads, clients, servers, code
                                            migration, clock synchronization, mutual exclusion, Bully and Ring
                                            Algorithm, Distributed
                                            transactions.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Consistency, Replication, fault
                                            tolerance and security: </h6>
                                        <p>
                                            Object replication, Data centric
                                            consistency model, client-centric consistency models, Introduction to fault
                                            tolerence, process
                                            resilience, recovery, distributed security architecture, security
                                            management, KERBEROS, secure
                                            socket layer, cryptography.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Distributed Object Based and File
                                            Systems : </h6>
                                        <p>
                                            CORBA, Distributed COM, Goals and
                                            Design Issues of Distributed file system, types of distributed file system,
                                            sun network file
                                            system,.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Distributed shared memory</h6>
                                        <p>
                                            DSM servers, shared memory consistency model,
                                            distributed document based systems : the world wide web, distributed
                                            co-ordination based
                                            systems: JINI Implementation: JAVA RMI, OLE, ActiveX, Orbix, Visbrokes,
                                            Object oriented
                                            programming with SOM

                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. Andrew S. Tanenbaum, Maarten Van Steen “Distributed Systems Principles
                                            and Paradigms”
                                            Pearson Education Inc. 2002.<br>
                                            2. Lui “Distributed Computing Principles and Applications”.<br>
                                            3. Harry Singh “Progressing to Distributed Multiprocessing” Prentice-Hall
                                            Inc.<br>
                                            4. B.W. Lampson “Distributed Systems Architecture Design & Implementation”,
                                            1985 Springer
                                            Varlag.<br>
                                            5. Parker Y. Verjies J. P. “Distributed computing Systems, Synchronization,
                                            control &
                                            Communications” PHI.<br>
                                            6. Robert J. & Thieranf “Distributed Processing Systems” 1978, Prentice
                                            Hall.<br>
                                            7. George Coulios, “Distribute System: Design and Concepts”, Pearson
                                            Education
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven" aria-expanded="false"
                                        aria-controls="collapseEleven">
                                        MCA 305 : Elective - III (3) Distributed Systems
                                    </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse"
                                    aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>UNIT I</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Introduction to Distributed
                                            Systems :</h6>
                                        <p>
                                            Goals of Distributed Systems, Hardware and
                                            Software concepts, the client server model, Remote procedure call, remote
                                            object invocation,
                                            message and stream oriented communications.
                                        </p>
                                        <strong>UNIT II</strong>

                                        <h6 style="font-size: 13px; padding-top: 2px;"> Process and synchronization in
                                            Distributed Systems : </h6>
                                        <p>
                                            Threads, clients, servers, code
                                            migration, clock synchronization, mutual exclusion, Bully and Ring
                                            Algorithm, Distributed
                                            transactions.
                                        </p>
                                        <strong>UNIT III</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Consistency, Replication, fault
                                            tolerance and security:</h6>
                                        <p>
                                            Object replication, Data centric
                                            consistency model, client-centric consistency models, Introduction to fault
                                            tolerence, process
                                            resilience, recovery, distributed security architecture, security
                                            management, KERBEROS, secure
                                            socket layer, cryptography.
                                        </p>
                                        <strong>UNIT IV</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Distributed Object Based and File
                                            Systems :</h6>
                                        <p>
                                            CORBA, Distributed COM, Goals and
                                            Design Issues of Distributed file system, types of distributed file system,
                                            sun network file
                                            system,.
                                        </p>
                                        <strong>UNIT V</strong>
                                        <h6 style="font-size: 13px; padding-top: 2px;">Distributed shared memory : </h6>
                                        <p>
                                            DSM servers, shared memory consistency model,
                                            distributed document based systems : the world wide web, distributed
                                            co-ordination based
                                            systems: JINI Implementation: JAVA RMI, OLE, ActiveX, Orbix, Visbrokes,
                                            Object oriented
                                            programming with SOM
                                        </p>
                                        <strong>REFERENCE BOOKS:</strong>
                                        <p>
                                            1. Andrew S. Tanenbaum, Maarten Van Steen “Distributed Systems Principles and Paradigms”
                                            Pearson Education Inc. 2002.<br>
                                            2. Lui “Distributed Computing Principles and Applications”.<br>
                                            3. Harry Singh “Progressing to Distributed Multiprocessing” Prentice-Hall Inc.<br>
                                            4. B.W. Lampson “Distributed Systems Architecture Design & Implementation”, 1985 Springer
                                            Varlag.<br>
                                            5. Parker Y. Verjies J. P. “Distributed computing Systems, Synchronization, control &
                                            Communications” PHI.<br>
                                            6. Robert J. & Thieranf “Distributed Processing Systems” 1978, Prentice Hall.<br>
                                            7. George Coulios, “Distribute System: Design and Concepts”, Pearson Education
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--================= Footer Part Close ===============-->
                    <div style="margin-right:1px; margin-left:1px; margin-top:2%;">
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
                                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis
                                    velit,
                                    eu auctor lacus vehicula sit amet.
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