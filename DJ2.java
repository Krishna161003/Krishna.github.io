class DJ2 {
    String name;
    int id;
    int marks;

    DJ2(String x, int y, int z) {
        name = x;
        id = y;
        marks = z;
    }

    DJ2(String a, int b) {
        name = a;
        id = b;
    }

    void display() {
        System.out.println(name + " " + id + " " + marks + " ");
    }

    public static void main(String[] args) {
        DJ2 s1 = new DJ2("RAM", 32, 99);
        DJ2 s2 = new DJ2("RAJ", 23);
        s1.display();
        s2.display();
    }
}