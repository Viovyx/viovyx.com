function fetchDataAndDisplay() {
    fetch('/projects/projects.json')
        .then(response => response.json())
        .then(data => {
            // Access the data and populate the webpage
            const bsMaps = data['BS Maps'];
            const wallpapers = data['Wallpapers'];
            const sites = data['Sites'];
            const other = data['Other'];

            // Function to create a project item element
            function createProjectItem(item) {
                const link = document.createElement('a');
                link.href = item.Link;
                link.target = '_blank';
                link.classList.add('project-item');

                const img = document.createElement('img');
                img.src = item.Image;
                img.width = '300';
                img.height = '300';

                const songTime = document.createElement('p');
                songTime.classList.add('project-item-text');
                songTime.textContent = item['Song Length'];

                const songInfo = document.createElement('div');
                songInfo.classList.add('song-info');

                const songTitle = document.createElement('h2');
                songTitle.classList.add('project-item-text', 'song-title');
                songTitle.textContent = item.Title;

                const songArtist = document.createElement('h3');
                songArtist.classList.add('project-item-text', 'song-artist');
                songArtist.textContent = item.Subtitle;

                const status = document.createElement('h4');
                status.classList.add('project-status');

                // Create and add the status span based on the 'Public' property
                const statusSpan = document.createElement('span');
                statusSpan.classList.add(item.Public ? 'status-public' : 'status-private');

                status.textContent = item.Public ? 'public' : 'private';
                

                songInfo.appendChild(songTitle);
                songInfo.appendChild(songArtist);

                // Append the status span inside the 'status' element
                status.appendChild(statusSpan);

                link.appendChild(img);
                link.appendChild(songTime);
                link.appendChild(songInfo);
                link.appendChild(status);

                return link;
            }

            // Function to populate a section with data and sort by 'Public' property
            function populateSection(data, sectionId) {
                const section = document.querySelector(`.${sectionId}`);

                // Sort the data array by 'Public' property (public projects first)
                const sortedData = data.sort((a, b) => {
                    return a.Public === b.Public ? 0 : a.Public ? -1 : 1;
                });

                sortedData.forEach(item => {
                    const projectItem = createProjectItem(item);
                    section.appendChild(projectItem);
                });
            }


            // Populate sections
            populateSection(bsMaps, 'beat-saber');
            populateSection(wallpapers, 'wallpapers');
            populateSection(sites, 'websites');
            populateSection(other, 'other');
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Call the fetchDataAndDisplay function when the page loads
window.addEventListener('load', fetchDataAndDisplay);
