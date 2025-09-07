// Function to get or create a unique user ID
function getUserId() {
    let userId = localStorage.getItem('userId');
    if (!userId) {
        // Generate a random user ID if one doesn't exist
        userId = 'user_' + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        localStorage.setItem('userId', userId);
    }
    return userId;
}

/* Sticky Notes JS */
document.querySelectorAll('.sticky-notes-container').forEach((container, index) => {
    const addBtn = container.parentElement.querySelector('.add-note-btn');
    const userId = getUserId(); // Get the unique user ID
    const pageKey = `stickyNotes_${userId}_page_${index}`; // Unique storage key per user and container
    let notesData = JSON.parse(localStorage.getItem(pageKey) || '[]');
    
    function saveNotes() {
        localStorage.setItem(pageKey, JSON.stringify(notesData));
    }
    
    function createNote(noteObj) {
        const note = document.createElement('div');
        note.className = 'sticky-note';
        note.style.top = noteObj.top + 'px';
        note.style.left = noteObj.left + 'px';
        
        const noteHeader = document.createElement('div');
        noteHeader.className = 'note-header';
        
        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'delete-btn';
        deleteBtn.innerHTML = '×';
        deleteBtn.addEventListener('click', e => {
            e.stopPropagation();
            deleteNote(noteObj, note);
        });
        
        const textarea = document.createElement('textarea');
        textarea.value = noteObj.text;
        
        noteHeader.appendChild(deleteBtn);
        note.appendChild(noteHeader);
        note.appendChild(textarea);
        container.appendChild(note);
        
        textarea.addEventListener('input', () => {
            noteObj.text = textarea.value;
            saveNotes();
        });
        
        makeDraggable(note, noteObj);
    }
    
    function deleteNote(noteObj, noteElement) {
        noteElement.remove();
        const idx = notesData.indexOf(noteObj);
        if (idx > -1) {
            notesData.splice(idx, 1);
            saveNotes();
        }
    }
    
    function makeDraggable(el, noteObj) {
        let isDown = false, offset = [0, 0];
        el.addEventListener('mousedown', e => {
            if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'TEXTAREA') {
                isDown = true;
                offset = [el.offsetLeft - e.clientX, el.offsetTop - e.clientY];
            }
        });
        document.addEventListener('mouseup', () => { isDown = false; });
        document.addEventListener('mousemove', e => {
            if (isDown) {
                el.style.left = (e.clientX + offset[0]) + 'px';
                el.style.top = (e.clientY + offset[1]) + 'px';
                noteObj.left = e.clientX + offset[0];
                noteObj.top = e.clientY + offset[1];
                saveNotes();
            }
        });
    }
    
    notesData.forEach(noteObj => createNote(noteObj));
    
    addBtn.addEventListener('click', () => {
        const noteObj = {
            text: '',
            top: 80 + (notesData.length * 20),
            left: 20 + (notesData.length * 20)
        };
        notesData.push(noteObj);
        createNote(noteObj);
        saveNotes();
    });
});