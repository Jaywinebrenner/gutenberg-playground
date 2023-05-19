// All code in this file will be injected globally

console.log("APP")
const page = document.querySelector("#page")
console.log("page",page)
const navItems = [...nav.querySelectorAll('nav_items')];
console.log("navItems",navItems);

navItems.forEach((el) => {
    el.addEventListener('click', () => {
      el.style.display = 'none';
    })
  })