let activeSrc = '';
let activeId = '';

const allowDrop = e => {
  e.preventDefault();
};

const clickDrag = e => {
  const dragElements = document.querySelectorAll('.dragElement');
  dragElements.forEach(dragElement => {
    dragElement.classList.remove('active');
  });

  e.currentTarget.classList.add('active');
  activeSrc = e.currentTarget.src;
  activeId = e.currentTarget.id;
};

const clickDrop = e => {
  if (activeSrc && activeId) {
    const newDropZone = document.querySelector(`#${activeId}`);
    newDropZone.outerHTML = `
        <div class="placeElement">
        </div>
    `;

    e.target.outerHTML = `
        <img
            id=${activeId}
            class="dragElement"
            src="${activeSrc}"
            draggable="true"
        />
    `;

    addListeners();
  }
};

const drag = e => {
  e.dataTransfer.setData('src', e.target.src);
  e.dataTransfer.setData('id', e.target.id);
};

const drop = e => {
  e.preventDefault();
  const src = e.dataTransfer.getData('src');
  const id = e.dataTransfer.getData('id');

  const newDropZone = document.querySelector(`#${id}`);
  newDropZone.outerHTML = `
    <div class="placeElement">
    </div>
  `;

  e.target.outerHTML = `
    <img
        id=${id}
        class="dragElement"
        src="${src}"
        draggable="true"
    />
		`;

  addListeners();
};

const addListeners = () => {
  const placeElements = document.querySelectorAll('.placeElement');
  const dragElements = document.querySelectorAll('.dragElement');

  placeElements.forEach(placeElement => {
    placeElement.addEventListener('drop', drop);
    placeElement.addEventListener('dragover', allowDrop);
    placeElement.addEventListener('click', clickDrop);
  });

  dragElements.forEach(dragElement => {
    dragElement.addEventListener('dragstart', drag);
    dragElement.addEventListener('click', clickDrag);
  });
};

const init = () => {
  addListeners();
};

init();