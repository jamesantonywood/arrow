

export const cssVar = (name) => {
    if (name[0] === '#') {
        return name
    } else {
        return getComputedStyle(document.body).getPropertyValue(name)
    }
}