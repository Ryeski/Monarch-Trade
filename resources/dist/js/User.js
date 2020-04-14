class User{
    constructor(name, id, type, mail, tutor, courses, rating ){
        this.userName = name;
        this.userID = id;
        this.userType = type;
        this.eMail = mail;
        this.userListings = [10];
        this.isTutor = tutor;
        this.courseSpecialty = courses;
        this.reviewRating = rating;
    }
}
