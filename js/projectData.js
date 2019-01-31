var projectData = {
          "flags": {
            "caption": "Force Directed Graph",
            "title": "Force Directed Graph of State Contiguity",
            "thumbnail": "images/flags.png",
            "link": "projects/flags.html",
            "description": "<p>While the title may be a mouthful, the end result is immediately intuitive. In this graph countries are nodes represented by their flags, and lines between the nodes represent international borders. Nodes can be clicked and dragged to rearrange the whole chart, or hovered over to highlight the connections to a given node.</p><p>Some of these features went beyond the scope of the original coursework, but I really enjoyed working on this one. Each time I discovered a new feature, I wanted to know how it worked- which usually led to its inclusion.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "impacts": {
            "caption": "Meteorite Impacts",
            "title": "Map Of Global Meteorite Impacts",
            "thumbnail": "images/impacts.png",
            "link": "projects/impacts.html",
            "description": "<p>A map showing meteorite impacts across the world, with node size & colour scaled to the intensity of the landing. Some extreme outliers in the data made choosing an appropriate scale for intensity a little tricky, but I’m happy the end result gives a good representation.</p> ",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "gol": {
            "caption": "Game Of Life Simulation",
            "title": "Game Of Life Simulation",
            "thumbnail": "images/gol.png",
            "link": "projects/gol.html",
            "description": "<p>This is a version of <a href=https://en.wikipedia.org/wiki/Conway's_Game_of_Life>Conway’s Game Of Life</a>. Each cell in the grid can have one of two states- alive or dead. Here the alive cells are coloured green. Each turn, every cell evaluates the states of its neighbours, and as a result will either switch states or remain as it is.</p><p>It is a highly simplified simulation of a population. If a cell is surrounded by living neighbours, it may die due to overpopulation. Similarly a cell may die if it has too few living neighbours, due to isolation. If a dead cell has the correct number of living neighbours, it may switch states to alive, simulating an expanding population.</p>",
            "skills": ["react", "javascript", "html", "jquery", "sass", "css"]
          },
          "heat": {
            "caption": "Temperature Heat Graph",
            "title": "Heat Graph of Global Temperatures",
            "thumbnail": "images/heat.png",
            "link": "projects/heat.html",
            "description": "<p>A chart to show average global land-surface temperatures, by month and by year, from 1754 – 2015.</p><p>Fundamentally similar to the first D3 project, this one is basically a series of vertically stacked bar charts.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "bar": {
            "caption": "Bar Chart of US GDP",
            "title": "Bar Chart of US GDP",
            "thumbnail": "images/bar.png",
            "link": "projects/bar.html",
            "description": "<p>A bar chart to show quarterly US gross domestic product from 1947 – 2015.</p><p>This was my first project using the D3 library, and I’m very happy with the way it turned out. The most difficult part of this was making the whole chart responsive, allowing it to adapt to different screen sizes without changing the relative positions of any of the components. While not strictly within the scope of this project, I learned a lot by going the extra step and it gave me a responsive template for all the subsequent D3 projects.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "dungeon": {
            "caption": "Dungeon Crawler Game",
            "title": "Dungeon Crawler Game",
            "thumbnail": "images/dungeon.png",
            "link": "projects/dungeon.html",
            "description": "<p>One of the more involved projects so far on this course, and definitely one of my favourites. I built this one from scratch, and in hindsight there are a lot of things I would do differently. Having now worked through a similar problem in Eloquent Javacript, I can see much more graceful ways to solve some of the problems I came across.</p><p>However, I’m proud of having worked through this and made the solutions work myself, and I wanted to preserve this code for future inspiration.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "markdown": {
            "caption": "Markdown Previewer",
            "title": "Markdown Previewer",
            "thumbnail": "images/markdown.png",
            "link": "projects/markdown.html",
            "description": "<p>A simple setup with an input text area and an output box to display the result. This gives the user a live preview of GitHub-flavoured markdown, a way of adding formatting to text when posting on GitHub.</p><p>This was my first project using React.js, and it certainly took a few days to get my head around the basics and start outputting something meaningful. However, once it started to click I really began to enjoy working with React.</p>",
            "skills": ["react", "javascript", "bootstrap", "html", "jquery", "sass", "css"]
          },
          "leaderboard": {
            "caption": "FreeCodeCamp Leaderboard",
            "title": "FreeCodeCamp Leaderboard",
            "thumbnail": "images/leaderboard.png",
            "link": "projects/leaderboard.html",
            "description": "<p>A leaderboard showing the most helpful members of the freecodecamp forums, based on user upvotes.</p><p>Fairly straightforward, with an ajax call to get the API, Bootstrap to build the table and a few sorting functions in the background.</p>",
            "skills": ["react", "javascript", "bootstrap", "html", "jquery", "sass", "css"]
          },
          "simon": {
            "caption": "Simon Game",
            "title": "Simon Game",
            "thumbnail": "images/simon.png",
            "link": "projects/simon.html",
            "description": "<p>Based on the popular kids game from back in the day, on start Simon will flash an increasingly complex sequence of colours, then wait for the player to respond in kind. Strict mode can be enabled for more challenge, where a failure will reset the game to level one.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "pomodoro": {
            "caption": "Pomodoro Timer",
            "title": "Pomodoro Timer",
            "thumbnail": "images/pomodoro.png",
            "link": "projects/pomodoro.html",
            "description": "<p>Based on the Pomodoro principal for work or revision, where intense bouts of productivity are interspersed with short periods of rest. Users can set their work and rest intervals and receive a notification when a period is over.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          },
          "calculator": {
            "caption": "JS Calculator",
            "title": "JS Calculator",
            "thumbnail": "images/calculator.png",
            "link": "projects/calculator.html",
            "description": "<p>Rather than something outlandish, I decided to test my CSS skills by making something as close to reality as possible- in this case a very ordinary pocket calculator. This was the first time I had a precise design for how I wanted a layout to look, and forced me to concentrate on the smallest details.</p><p>The calculator functions were pretty straight-forward, apart from the percentage button which took a bit more solving.</p>",
            "skills": ["javascript", "html", "jquery", "css"]
          }
        }